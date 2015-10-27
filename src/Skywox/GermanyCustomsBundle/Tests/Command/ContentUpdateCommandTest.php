<?php

namespace Skywox\GermanyCustomsBundle\Tests\Command;

use Skywox\GermanyCustomsBundle\Command\ContentUpdateCommand;

class ContentUpdateCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @var ContentUpdateCommand */
    protected $command;

    /**
     * UN/EDIFACT message example
     * @var string
     */
    protected $message;

    /**
     * UN/EDIFACT message example parts
     * @return array
     */
    private function messageParts()
    {
        return [
            'char' => ["ef\x20\x20", 'ef  ', 0],
            'varchar' => ['"abcd"+', 'abcd', 4],
            'date' => ['27122004132735', '27.12.2004, 13:27:35', 11],
            'integer' => ['+03567,', 3567, 25],
            'decimal' => ['-035,67', -35.67, 32],
            'long' => ['000000005abcde', 'abcde', 39],
            'clob' => ["000000005\x0Aabcde", 'abcde', 53],
        ];
    }

    protected function setUp()
    {
        $this->command = new ContentUpdateCommand();

        foreach ($this->messageParts() as $v) {
            $this->message .= $v[0];
        }
    }

    public function testParseChar()
    {
        $start = $this->messageParts()['char'][2];
        $length = strlen($this->messageParts()['char'][0]);
        $expStart = $start + $length;

        $value = $this->command->parseChar($this->message, $start, $length);

        $this->assertEquals($this->messageParts()['char'][1], $value);
        $this->assertEquals($expStart, $start);
    }

    public function testParseVarchar()
    {
        $start = $this->messageParts()['varchar'][2];
        $expStart = $start + strlen($this->messageParts()['varchar'][0]);
        $value = $this->command->parseVarchar($this->message, $start);

        $this->assertEquals($this->messageParts()['varchar'][1], $value);
        $this->assertEquals($expStart, $start);
    }

    public function testParseDate()
    {
        $start = $this->messageParts()['date'][2];
        $expStart = $start + strlen($this->messageParts()['date'][0]);

        $value = $this->command->parseDate($this->message, $start);

        $this->assertEquals($this->messageParts()['date'][1], $value->format('d.m.Y, H:i:s'));
        $this->assertEquals($expStart, $start);
    }

    public function testParseInteger()
    {
        $start = $this->messageParts()['integer'][2];
        $length = strlen($this->messageParts()['integer'][0]) - 2;
        $expStart = $start + $length + 2;

        $value = $this->command->parseInteger($this->message, $start, $length);

        $this->assertEquals($this->messageParts()['integer'][1], $value);
        $this->assertEquals($expStart, $start);
    }

    public function testParseDecimal()
    {
        $start = $this->messageParts()['decimal'][2];
        $precision = strlen($this->messageParts()['decimal'][0]) - 2;
        $expStart = $start + $precision + 2;

        $value = $this->command->parseDecimal($this->message, $start, $precision);

        $this->assertEquals($this->messageParts()['decimal'][1], $value);
        $this->assertEquals($expStart, $start);
    }

    public function testParseLong()
    {
        $start = $this->messageParts()['long'][2];
        $length = strlen($this->messageParts()['long'][1]);
        $expStart = $start + $length + 9;

        $value = $this->command->parseLong($this->message, $start, null);

        $this->assertEquals($this->messageParts()['long'][1], $value);
        $this->assertEquals($expStart, $start);
    }

    public function testParseClob()
    {
        $start = $this->messageParts()['clob'][2];
        $length = strlen($this->messageParts()['clob'][1]);
        $expStart = $start + $length + 10;

        $value = $this->command->parseClob($this->message, $start, null);

        $this->assertEquals($this->messageParts()['clob'][1], $value);
        $this->assertEquals($expStart, $start);
    }
}
