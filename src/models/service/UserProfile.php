<?php
namespace src\models\service;

class UserProfile {
    private $user_id;
    private $birth_date;
    private $country;
    private $state;
    private $city;
    private $following;
    private $followers;
    private $qtyPost;

    public function __construct($user_id, $birth_date, $country, $state, $city, $following, $followers, $qtyPost) {
        $this->user_id = $user_id;
        $this->birth_date = $birth_date;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->following = $following;
        $this->followers = $followers;
        $this->qtyPost = $qtyPost;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getBirthDate() {
        return $this->birth_date;
    }

    public function setBirthDate($birth_date) {
        $this->birth_date = $birth_date;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getFollowing() {
        return $this->following;
    }

    public function setFollowing($following) {
        $this->following = $following;
    }

    public function getFollowers() {
        return $this->followers;
    }

    public function setFollowers($followers) {
        $this->followers = $followers;
    }

    public function getQtyPost() {
        return $this->qtyPost;
    }

    public function setQtyPost($qtyPost) {
        $this->qtyPost = $qtyPost;
    }
}
