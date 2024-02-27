<?php
class NilaiAkhir {
    private $participation;
    private $assignment;
    private $midterm;
    private $final;

    public function __construct($participation, $assignment, $midterm, $final) {
        $this->participation = $participation;
        $this->assignment = $assignment;
        $this->midterm = $midterm;
        $this->final = $final;
    }

    public function calculateNA() {
        // Calculate NA according to the formula provided
        $na = ($this->participation * 0.2) + ($this->assignment * 0.3) + ($this->midterm * 0.2) + ($this->final * 0.3);
        return $na;
    }
}
?>
