<?php

class Instagram{

    public $user_id;
    public $client_id;
    protected $access_token = '1376315739.23e2ac7.7d9fa8f94b064c448369d8961c02b16a';

    public function __construct( $user_id, $client_id)
    {
        $this->user_id = ($user_id) ? $user_id : NULL;
        $this->client_id = $client_id;
    }

    public function authorize()
    {
        $authorize_data = $this->get_data("https://instagram.com/oauth/authorize/?client_id=$this->client_id&redirect_uri=http://smsarvip.com&response_type=token");
    }

    public function get_data($url){
        $json = file_get_contents($url);
        $data = json_decode($json);
        return $data;
    }

    public function get_recent_medias($count = 12)
    {
        return $this->get_data("https://api.instagram.com/v1/users/$this->user_id/media/recent/?client_id=$this->client_id&count=$count&access_token=$this->access_token");
    }

}
