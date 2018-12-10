<?php 

/**
*Random Answers by comments.
*
*@autor by Zephir's
*/

class RandomComments {

	/** @var string */
	private $file; #читаем весь файл
	/** @var int*/
	private $counter; #счетчик выхода
	/** @var string */
	private $body; #название читаемого файла
	/** @var string */
	private $StringCommit; #выход контейнер

    public function getAnswer ($chooseFile): string {

        $this->body = $chooseFile;
        $this->file = file($this->body);
        $this->counter = count($this->file)-1;
        $this->StringCommit = $this->file[rand(1, $this->counter)];

        if (is_string($this->StringCommit)) {
        	return $this->StringCommit;
        }else{
        	exit("Error: StringCommit isn't string");
        }
    }
}


?>