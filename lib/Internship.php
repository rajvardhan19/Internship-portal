<?php
    class Internship{
        private $db;
        public function __construct(){
            $this->db = new Database;
            // echo "Testing";
        }

        public function getALLInternships(){
            // echo "Start";
            $this->db->query("SELECT internships.*, categories.name AS cname 
                        FROM internships
                        INNER JOIN categories 
                        ON internships.category_id = categories.id
                        ORDER BY post_date DESC ");

            $results = $this->db->resultSet();

            return $results;
        }

        // public function testing(){
        //     echo "Test2";
        // }

        public function getCategories(){
            $this->db->query("SELECT * FROM categories");

            $results = $this->db->resultSet();

            return $results;
        }

        public function getByCategory($category){
            $this->db->query("SELECT internships.*, categories.name AS cname 
                        FROM internships
                        INNER JOIN categories 
                        ON internships.category_id = categories.id
                        WHERE internships.category_id = $category
                        ORDER BY post_date DESC ");

            $results = $this->db->resultSet();

            return $results;
        }

        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");

            $this->db->bind(':category_id', $category_id);

            $row = $this->db->single();
            return $row;
        }

        public function getInternship($id){
            $this->db->query("SELECT * FROM internships WHERE id = :id");

            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;
        }

    }