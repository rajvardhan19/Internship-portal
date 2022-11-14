<?php
    class Internship{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function getALLInternships(){
            $this->db->query("SELECT internships.*, categories.name AS cname 
                        FROM internships
                        INNER JOIN categories 
                        ON internships.category_id = categories.id
                        ORDER BY post_date DESC ");

            $results = $this->db->resultSet();

            return $results;
        }

    }