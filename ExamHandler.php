<?php 

class ExamHandler{
	
	public function getQuestionChoices($question_id){
		if (empty($question_id)) {
			return false;
		}

		$result = ExamDAO::getQuestionChoices($question_id);

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function checkAnswers($answers){
		if (empty($answers)) {
			return false;
		}

		$result = ExamDAO::checkAnswers($answers);

		return $result;
	}

}

?>

