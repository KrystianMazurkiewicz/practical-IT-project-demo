<?php 

  class read {
    private $db;
    
    function __construct($conn) {
      $this->db = $conn;
    }

    public function getUser($username) {
      try {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_username_by_id($id) {
      try {
        $sql = "SELECT username FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_user_id_by_username($username) {
      try {
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_student_that_is_interested_in_internship($id) {
      try {
        $sql = "SELECT user_id, status FROM student_has_internship WHERE internship_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function getUsers() {
      try {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
    
    public function get_info_about_profile($id) {
      try {
        $sql = "SELECT * FROM about_me WHERE user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function getAllInternships() {
      try {
        $sql = "SELECT * FROM internships";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_post_ids_for_student($user_id) {
      try {
        $sql = "SELECT internship_id FROM student_has_internship WHERE user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':user_id', $user_id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_internships_for_student($id) {
      try {
        $sql = "SELECT * FROM internships WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_all_internships_from_company($co_name) {
      try {
        $sql = "SELECT post_title FROM internships WHERE co_name = :co_name";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':co_name', $co_name);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_internship_id_from_company_by_post_title($post_title) {
      try {
        $sql = "SELECT id FROM internships WHERE post_title = :post_title";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':post_title', $post_title);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_internship_by_id($id) {
      try {
        $sql = "SELECT * FROM internships WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }


    public function get_internship_status_to_user($user_id, $internship_id) {
      try {
        $sql = "SELECT status FROM student_has_internship WHERE user_id = :user_id AND internship_id = :internship_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':user_id', $user_id);
        $stmt->bindparam(':internship_id', $internship_id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    

    public function get_internship($id) {
      try {
        $sql = "SELECT * FROM internships WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
    
    public function getAllPossibleTags() {
      try {
        // $sql = "SELECT name FROM tags";
        $sql = "SELECT * FROM tags";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function get_applied_internship($id) {
      try {
        $sql = "SELECT internship_id FROM student_has_internship WHERE user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    






  }
?>