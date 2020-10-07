<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dirape\Token\Token;
use App\Servers;
use App\User;
use App\GuildData;
use Illuminate\Support\Facades\DB;

class StorageController extends Controller
{

    private function isJson($data) {
        json_decode($data, true);
        return (json_last_error() === JSON_ERROR_NONE);
    }

    private function removeDuplicates($guildid, $user)
    {
        GuildData::where([ 'userId' => $user->id, 'guildId' => $guildid ])->delete();
    }

    public function addGuildData(Request $request)
    {
        $user = User::where([ 'token_key' => $request->token_key ])->firstOrFail();

        $this->removeDuplicates($request->guildid, $user);

        $data = GuildData::create([
            'uuid' => (new Token())->Unique('guild_data', 'uuid', 10),
            'userId' => $user->id,
            'data' => $request->data,
            'guildId' => $request->guildid
        ]);

        return json_encode(array( 'success' => true, 'dataId' => $data->id, 'dataUUID' => $data->uuid ));
    }

    public function getGuildData(Request $request)
    {
        if($request->userId && $request->uuid && $request->apiKey) {
            if($request->apiKey != "7U5PhJn4u") return json_encode(array( 'success' => false ));

            $user = User::where('discord_id', $request->userId)->first();
            if(!$user) return json_encode(array( 'success' => false ));

            $guildsData = GuildData::where([ 'userId' => $user->id, 'uuid' => $request->uuid ])->first();

            if(!$guildsData) return json_encode(array( 'success' => false ));

            return json_encode(array( 'success' => true, 'guildData' => $guildsData ));
        } else {
            return json_encode(array( 'success' => false ));
        }
    }

    public function statGuildData() {
        $statGuildData = GuildData::all()->count();
        return $statGuildData;
    }

}
