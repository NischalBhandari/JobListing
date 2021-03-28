<?php

class Quiz{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}


	public function getQuestions(){
		$this->db->query("SELECT * FROM questions q LEFT JOIN answers a ON q.id = a.question_id");
			$results = $this-> db->resultSet();
			return $results;
	}


	public function createQuestions($data){
		$this->db->query("INSERT INTO questions(question_statement) VALUES (:question_statement)");
		$this->db->bind(':question_statement', $data['question_statement']);
		if($this->db->execute()){
			$this->db->query("SELECT * FROM questions WHERE question_statement = :question_statement");
			$this->db->bind(':question_statement', $data['question_statement']);
			$row=$this->db->single();
			if($row){
				$this->db->query("INSERT INTO answers(answer_statement,question_id,is_correct) VALUES(:answer_statement_1,:q_id1,:is_correct1),(:answer_statement_2,:q_id2,:is_correct2),(:answer_statement_3,:q_id3,:is_correct3),(:answer_statement_4,:q_id4,:is_correct4)");
				$this->db->bind(':answer_statement_1',$data['answer_statement_1']);
				$this->db->bind(':q_id1', $row->id);
				$this->db->bind(':is_correct1',$data['is_correct1']);
				$this->db->bind(':answer_statement_2',$data['answer_statement_2']);
				$this->db->bind(':q_id2', $row->id);
				$this->db->bind(':is_correct2',$data['is_correct2']);
				$this->db->bind(':answer_statement_3',$data['answer_statement_3']);
				$this->db->bind(':q_id3', $row->id);
				$this->db->bind(':is_correct3',$data['is_correct3']);
				$this->db->bind(':answer_statement_4',$data['answer_statement_4']);
				$this->db->bind(':q_id4', $row->id);
				$this->db->bind(':is_correct4',$data['is_correct4']);
				if($this->db->execute()){
					return true;
				}

			}
			
		}
		else{
			return false;
		}
	}
}	