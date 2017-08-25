<?php
use Illuminate\Database\Seeder;
class QuestionTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('question')->truncate();
		DB::table('question')->insert
		(
			array
			(
				array('id'	=>	1, 'question'	=>	"Is your PC Power On ?", 'yes'	=>	"4", 'no'	=>	"2", 'comment'	=>	""),
				array('id'	=>	2, 'question'	=>	"Check if power socket is working.", 'yes'	=>	"3", 'no'	=>	"", 'comment'	=>	"Repair the power socket"),
				array('id'	=>	3, 'question'	=>	"Replace power-cord and check working or not.", 'yes'	=>	"4", 'no'	=>	"", 'comment'	=>	"Faulty Monitor, needs to be replased"),
				array('id'	=>	4, 'question'	=>	"Check if your monitor is turned on (If Monitor shows green LED then it's on).", 'yes'	=>	"6", 'no'	=>	"5", 'comment'	=>	""),
				array('id'	=>	5, 'question'	=>	"Make sure if power cable is properly inserted", 'yes'	=>	"6", 'no'	=>	"", 'comment'	=>	"Check Power Cable"),
				array('id'	=>	6, 'question'	=>	"Is it showing LED near power button ?", 'yes'	=>	"7", 'no'	=>	"", 'comment'	=>	"cable is faulty, needs to be replased"),
				array('id'	=>	7, 'question'	=>	"Are you able to see any contet on monitor ?", 'yes'	=>	"", 'no'	=>	"", 'comment'	=>	"Might be problem with CPU"),

				array('id'	=>	8, 'question'	=>	"Is your Laptop Turning On ?", 'yes'	=>	"10", 'no'	=>	"9", 'comment'	=>	""),
				array('id'	=>	9, 'question'	=>	"Do you see any LED near charging point or Input of Laptop ?", 'yes'	=>	"10", 'no'	=>	"", 'comment'	=>	"Check adaptop and replace it"),
				array('id'	=>	10, 'question'	=>	"Are you able to see any content on display ?", 'yes'	=>	"12", 'no'	=>	"11", 'comment'	=>	""),
				array('id'	=>	11, 'question'	=>	"Are you able to hear any beep sound ?", 'yes'	=>	"", 'no'	=>	"", 'comment'	=>	"Give details"),
				array('id'	=>	12, 'question'	=>	"Are you able to see welcome / start screen ?", 'yes'	=>	"13", 'no'	=>	"", 'comment'	=>	"Give Details"),
				array('id'	=>	13, 'question'	=>	"Your system working properly or not ?", 'yes'	=>	"14", 'no'	=>	"", 'comment'	=>	"Give Details"),
				array('id'	=>	14, 'question'	=>	"Is your laptop restarting ?", 'yes'	=>	"", 'no'	=>	"", 'comment'	=>	"Give Details"),
			)
		);
	}
}