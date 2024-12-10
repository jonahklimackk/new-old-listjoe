<?php

namespace app\Helpers;

use App\Models\User;

class ImportsDatabase
{


	/**
	* Imports the table
	*
	* @return int
	*/
	public static function import()
	{
		// somehow the double quotes worked, so no need to changew the pw
		// the dollar signs are fine apparently
		// $importData = str_replace ("$", "\$", $importData)




		// $theMagicInsert = "insert into users values (1,"Jonah Klimack","listjoe2","jonahklimackk2@gmail.com",NULL,"$2y$12$T3LqEtt1EBFe9ZUR3k/Em.odOPt0JaE44cdXnlPDfN4WKzVO44c7W",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,now(),now(),"free",NULL,0,0,0,0,"",NULL, 0,0,""";
		// $tmi = explode(",", $theMagicInsert);

		// dump (count($tmi));
		// exit;


		$dataToBeAppended = 'NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,now(),now(),"free",NULL,0,0,0,0,"",NULL, 0,0,"",1';
		$dataToBeAppended2 = explode(",", $dataToBeAppended);
			// dump($data2);



					// IMPORT SELECT QUERIES INTO THIS VARIABALE - 
		$importData = 'INSERT INTO `users` VALUES (579,"Marc Andrew Schuyler","cashwithmarc","cashwithmarc@gmail.com","2024-12-08 22:25:31","$2y$12$kCDSJmZgKBsnQmUrpTja1eW360YVKpbjU/cmrp35OEnaCOfCNG3LO",NULL,NULL,NULL,NULL,605,NULL,"2024-12-08 22:24:24","2024-12-08 22:25:31");
INSERT INTO `users` VALUES (580,"Verlinda  Sweeting","vsweeting","mysafelist2001@gmail.com","2024-12-08 22:53:27","$2y$12$CnmO/HCPByHUaTrYbE23U.z3OFRTra5URyUkef26yaOWDq9fMAHyq",NULL,NULL,NULL,NULL,606,"profile-photos/mFEQT2LH2dFn789oZWydk9pEMk0OlAAkH3ea8PQi.png","2024-12-08 22:51:50","2024-12-08 22:54:08");
INSERT INTO `users` VALUES (581,"amine bakkali","blablublaxer","aminemarrouny@gmail.com","2024-12-09 07:34:40","$2y$12$qmh1OJR9R0e8tGzIwylkNepf/dKXsFTinZUrJ2ruK/CyvUyjMzYDC",NULL,NULL,NULL,NULL,607,NULL,"2024-12-09 07:32:30","2024-12-09 07:34:40");
INSERT INTO `users` VALUES (582,"vpconNam","vpconNam","vpconcord@maildom.online","2024-12-09 14:50:43","$2y$12$0cHRVOz7jT8JNTpb8qcG3O5cmqjRFOI3xdu14Jqr4iTcJObN6dRAu",NULL,NULL,NULL,NULL,608,NULL,"2024-12-09 14:36:46","2024-12-09 14:50:43");';















		$importData2 = explode(");", $importData);

		$handle = fopen("/home/jonah/new-users.sql", "w");

		foreach ($importData2 as $import){
				// dump($import);
			$noNewLines = str_replace("\t", "",$import);
			$noNewLines2 = str_replace("\n", "",$noNewLines);
				// dump($noNewLines2);/

				//now wee have to chop off everythnig afetr x in the array
			$importData3 = explode(",", $noNewLines2);
				// dump($importData3);
			$importData4 = array_slice($importData3, 0, 6);

				//this is it, this is the first 6 entries
				//append data to importdata4
				// dump($importData4);
			$importData5 = array_merge($importData4, $dataToBeAppended2);
				// dump($importData5);

				//co9py and paste these
			$importData6 = implode(",", $importData5);

			$sqlPrefix = "insert into users values(";
			$sqlPostfix = ");";

			$sqlToExportOneLine = $sqlPrefix.$importData6.$sqlPostfix;
				// dump($sqlToExport);

				// now I need to make a file and inseirt this into it
			$sqlToExport[] = $sqlToExportOneLine;
			fwrite($handle, $sqlToExportOneLine."\n");

		}

			//write this to file now now it/s all in one array
		dump($sqlToExport);

		fclose($handle);





	}
}