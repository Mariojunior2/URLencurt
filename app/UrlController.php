<?php 
require_once 'DB.php';

class UrlController {
    private $db;

    public function __construct(){
        $this->db = new DB();
    }

    public function encurtarUrl($url) {
        $url_short = substr(md5($url), 0, 6);
        $stmt = $this->db->getConection()->prepare("INSERT INTO urls (url, url_short) VALUES (:url, :url_short)");
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':url_short', $url_short);
        $stmt->execute();
    
        return $url_short;

        $stmt = $this->db->getConection()->prepare("SELECT url_short FROM urls WHERE url = :url");
        $stmt->bindParam(':url', $url);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC)['url_short'];
        }
    }
    

    public function UrlDescurtada($url_short) {
        $stmt = $this->db->getConection()->prepare("SELECT url FROM urls WHERE url_short = :url_short");
        $stmt->bindParam(':url_short', $url_short);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC)['url'];
        } else {
            return false;
        }
    }
}



?>