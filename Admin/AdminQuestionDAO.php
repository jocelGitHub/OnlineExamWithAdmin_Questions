<?php 

class AdminQuestionDAO{

	public static function getAllQuestions(){
		global $db;
		try {
			$query = "SELECT * FROM questionexam";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				$data = array();
				while($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				$result->free();
				error_log("Table not Empty");
				return $data;
			} else {
				error_log("Empty Table");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;

	}

	public static function deleteQuestion($id){
		global $db;
		try {
			$query = "DELETE FROM questionexam WHERE question_id = '{$id}' ";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully Deleted");
				return true;
			}else {
				error_log("Unsuccessfully Deleted");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;		
	}

	public static function editQuestion($id, $question, $choice_A, $choice_B, $choice_C, $choice_D, $answer){
		global $db;
		try {
			$query = "UPDATE questionexam SET questions = '{$question}', choice_A = '{$choice_A}', choice_B = '{$choice_B}', choice_C = '{$choice_C}', choice_D = '{$choice_D}', answer = '{$answer}' WHERE question_id = '{$id}' ";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully Updated");
				return true;
			} else {
				error_log("Unsuccessfully Updated");
				return false;
			}
		} catch(Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function getOneQuestion($id){
		global $db;
		try {
			$query = "SELECT * FROM questionexam WHERE question_id = '{$id}' ";
			$result = $db->query($query);

			if ($result->num_rows > 0) {
				$record = array();
				while ($row = $result->fetch_assoc()){
					$record[] = $row;
				}
				error_log("With Data");
				return $record;
			} else {
				error_log("Without DATA");
				return false;
			}
		} catch(Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function addQuestions($question, $choice_A, $choice_B, $choice_C, $choice_D, $answer){
		global $db;
		try {
			$query = "INSERT INTO questionexam (questions, choice_A, choice_B, choice_C, choice_D, answer) VALUES ('{$question}', '{$choice_A}', '{$choice_B}', '{$choice_C}', '{$choice_D}','{$answer}')";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully INSERTED");
				return true;
			} else {
				error_log("Unsuccessfully INSERTED");
				return false;
			}
		} catch(Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}
}

 ?>