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
		$importData = 'INSERT INTO `users` VALUES (447,"Charlestub","Charlestub","bbbteam@hotmail.com",NULL,"$2y$12$jRr/V40NJrh02lrzwtULn.mYRp1Ft0klqX4cyaxVwPchF2Ic32zOO",NULL,NULL,NULL,NULL,465,NULL,"2024-11-30 18:53:28","2024-11-30 18:53:29");
INSERT INTO `users` VALUES (448,"DanielMon","DanielMon","lmoss4054@hotmail.com",NULL,"$2y$12$VqbyCBc3DF1QglNNB5DqrOm2ml9kJ.r3oHB7t/mneSZ/ZZ4ZktA6S",NULL,NULL,NULL,NULL,NULL,NULL,"2024-11-30 19:26:18","2024-11-30 19:26:18");
INSERT INTO `users` VALUES (449,"Whitneyswash","Whitneyswash","scarng99@gmail.com",NULL,"$2y$12$QqBXYR7W4/xN7aCo5pk4t..dIyZULAoybEtoRAu60x0D.k0Gm0Yj.",NULL,NULL,NULL,NULL,467,NULL,"2024-11-30 19:48:26","2024-11-30 19:48:27");
INSERT INTO `users` VALUES (450,"ZacharyUncot","ZacharyUncot","maxwell.mcclure@wtwco.com",NULL,"$2y$12$9B3PPkbd0cqRmW6K5aaWeOnhSrwxG7eAzu7OSJuvmIbtFv5GaZO/m",NULL,NULL,NULL,NULL,468,NULL,"2024-11-30 20:02:13","2024-11-30 20:02:15");
INSERT INTO `users` VALUES (451,"KennethRag","KennethRag","toddmayer@hotmail.com",NULL,"$2y$12$mcCWZMLE6KGrCqE.IFAJouJk5SbOb2FgfvGbA6j1jyFg3E/B1x3fG",NULL,NULL,NULL,NULL,469,NULL,"2024-11-30 20:30:43","2024-11-30 20:30:45");
INSERT INTO `users` VALUES (452,"Brianbah","Brianbah","jkosloske@gmail.com",NULL,"$2y$12$q2q6MUA862RjVsMcNwMRd.OoJMnVLDaplNp0zGYBGsmUfeQEURvpK",NULL,NULL,NULL,NULL,470,NULL,"2024-11-30 20:43:09","2024-11-30 20:43:11");
INSERT INTO `users` VALUES (453,"JasonMip","JasonMip","jodysanham@gmail.com",NULL,"$2y$12$sRPq3WAPxiioLfNfhm7Jw.OiNqzbQxsJglgV6SvNhZdHwnuUaKFe.",NULL,NULL,NULL,NULL,471,NULL,"2024-11-30 20:54:06","2024-11-30 20:54:07");
INSERT INTO `users` VALUES (454,"CharlesShade","CharlesShade","gwenmilton@yahoo.com",NULL,"$2y$12$4rSaxju3n7k2mYrjfRu46.Ddrpv07e7pSXDZ0h8JOQ37hrEAhi9Yi",NULL,NULL,NULL,NULL,472,NULL,"2024-11-30 21:17:10","2024-11-30 21:17:12");
INSERT INTO `users` VALUES (455,"Josephphize","Josephphize","reportermcgeough@gmail.com",NULL,"$2y$12$v2HnKBWkSsjux2rhEEtu6uwK/cThA1wXEvdpv.GTdF/FsVJP8c9uC",NULL,NULL,NULL,NULL,473,NULL,"2024-11-30 21:27:36","2024-11-30 21:27:38");
INSERT INTO `users` VALUES (456,"RubenCep","RubenCep","sergio.alfred.ribeiro@gmail.com",NULL,"$2y$12$oS2ZRkSMPRGEIxSZRJ0suOZ6GtqP.c34ASmnwlFmtdoW8zaJ/LJ.e",NULL,NULL,NULL,NULL,474,NULL,"2024-11-30 21:28:37","2024-11-30 21:28:41");
INSERT INTO `users` VALUES (457,"Bula dinor 000x listjoe.com f1","Bula dinor 000x listjoe.com f1","mitaxebandilis@gmail.com",NULL,"$2y$12$29EwF7wurj73nB1Dk.v6JuY58eFa.jsl9qb2bVoboAP2qWeY9WXuK",NULL,NULL,NULL,NULL,475,NULL,"2024-11-30 21:38:24","2024-11-30 21:38:25");
INSERT INTO `users` VALUES (458,"WilliamGualt","WilliamGualt","hatt_les3@yahoo.com",NULL,"$2y$12$.4qwy3GQP.C0FMQXScr4zeMxQZTIZ7AeZSSeN4J4yHejOZcmy7l1y",NULL,NULL,NULL,NULL,476,NULL,"2024-11-30 21:39:32","2024-11-30 21:39:33");
INSERT INTO `users` VALUES (459,"Kevinroppy","Kevinroppy","jcast615@gmail.com",NULL,"$2y$12$vW/oQMGxF52Ubphsj4Zd/OYWV8TttEzCSRxNKVfFZBcYO6d1HNqE6",NULL,NULL,NULL,NULL,477,NULL,"2024-11-30 21:56:23","2024-11-30 21:56:24");
INSERT INTO `users` VALUES (460,"AlvinBex","AlvinBex","faleneh@verizon.net",NULL,"$2y$12$I8VD/d1FE1x9Ssrrqco2FOVpM2FXSwYEjBVWE5vFzGPwtmXp7tMAW",NULL,NULL,NULL,NULL,478,NULL,"2024-11-30 21:59:37","2024-11-30 21:59:39");
INSERT INTO `users` VALUES (461,"DanielSweek","DanielSweek","anita.g0889@gmail.com",NULL,"$2y$12$c/bBS5SJpJhQaTC2bUdIbOc34nF49I9g1qIdJuAf/nrV/bb9UgDtC",NULL,NULL,NULL,NULL,479,NULL,"2024-11-30 22:10:19","2024-11-30 22:10:21");
INSERT INTO `users` VALUES (462,"SeymourMub","SeymourMub","charles.fangsrud@gmail.com",NULL,"$2y$12$uriDGb54JjM.GaMJSm7iU.a3J16MtVrDBr3T.EpoAgMTYjyvsyiNe",NULL,NULL,NULL,NULL,480,NULL,"2024-11-30 22:17:03","2024-11-30 22:17:04");
INSERT INTO `users` VALUES (463,"Henrylex","Henrylex","justin.teutsch@gmail.com",NULL,"$2y$12$PeDGQJaradUhpdYCWyQTJudVdY5fR4jEvYonTMazo9YRYpvALK6r2",NULL,NULL,NULL,NULL,481,NULL,"2024-11-30 22:19:31","2024-11-30 22:19:32");
INSERT INTO `users` VALUES (464,"AndrewCiple","AndrewCiple","yikyanlee@gmail.com",NULL,"$2y$12$jw8bFxBATtTcdaZB658MquV6ybmTPP02gJBCY5KC6.tWF/9GZAuOy",NULL,NULL,NULL,NULL,482,NULL,"2024-11-30 23:02:44","2024-11-30 23:02:45");
INSERT INTO `users` VALUES (465,"Normanblind","Normanblind","rolnfrmpoln@yahoo.com",NULL,"$2y$12$IvwFkMJ0c8pAKHddFjDUru2lDBV8Kii7PZqnfYvhMkcNOF3d0ofyO",NULL,NULL,NULL,NULL,483,NULL,"2024-11-30 23:18:47","2024-11-30 23:18:48");
INSERT INTO `users` VALUES (466,"EdwardFIT","EdwardFIT","glennetamorgan@att.net",NULL,"$2y$12$.AuA3V4INSHf2W3ajcIbyeZcDXrF6Uh4sqsZnmGNr/1R.NOcFC1xm",NULL,NULL,NULL,NULL,484,NULL,"2024-11-30 23:39:19","2024-11-30 23:39:21");
INSERT INTO `users` VALUES (467,"ErwinCloda","ErwinCloda","brgriffith23@gmail.com",NULL,"$2y$12$cABMHl6YbRUJEcYJt8gT8.UM5FORpKxQi82C3G9l.nu16MiDJZGYO",NULL,NULL,NULL,NULL,485,NULL,"2024-11-30 23:52:31","2024-11-30 23:52:32");
INSERT INTO `users` VALUES (468,"Juliusfetry","Juliusfetry","ge@brandelity.com",NULL,"$2y$12$F0VmvKCrfKYBrRZM9nsIDuV6UdE02rGH24QI2u82VP8vzy1etaLbq",NULL,NULL,NULL,NULL,486,NULL,"2024-11-30 23:56:07","2024-11-30 23:56:09");
INSERT INTO `users` VALUES (469,"BrianAgeta","BrianAgeta","rajpreet15@gmail.com",NULL,"$2y$12$Y9fdQ.1/9xyRKPeLKGHWZOclt9XGBYXvZumiQCuX5QVcMRNDfHHj.",NULL,NULL,NULL,NULL,487,NULL,"2024-12-01 00:13:11","2024-12-01 00:13:12");
INSERT INTO `users` VALUES (470,"Kevintuh","Kevintuh","sdfields58@gmail.com",NULL,"$2y$12$O2vdPo2i2wwE2lWIm1WpPu8XDMr7e9xOd.N9f.GccRvVacK.AX7IW",NULL,NULL,NULL,NULL,488,NULL,"2024-12-01 00:13:43","2024-12-01 00:13:44");
INSERT INTO `users` VALUES (471,"Robertfub","Robertfub","daniellemaradunn@gmail.com",NULL,"$2y$12$hQwFGIpitTD1FcwXQ.N7sOBGCtoWue1vAt2C/FGqP/8J9iJFhNXg6",NULL,NULL,NULL,NULL,489,NULL,"2024-12-01 00:41:16","2024-12-01 00:41:18");
INSERT INTO `users` VALUES (472,"Kermitzom","Kermitzom","redfrogmediauk@gmail.com",NULL,"$2y$12$l6VdF99djVTb9idYvJYBLuiSpxJt2G8yUmmRLqzD80PO0RHZ3V/4G",NULL,NULL,NULL,NULL,490,NULL,"2024-12-01 00:50:17","2024-12-01 00:50:18");
INSERT INTO `users` VALUES (473,"JaimeCon","JaimeCon","mail@greinert-glatt.de",NULL,"$2y$12$t9OCKHx2b6LgnxXPgjOUHOrCmTTC7Hs2N6CslTeqfYoYCeXHRw9na",NULL,NULL,NULL,NULL,491,NULL,"2024-12-01 01:19:54","2024-12-01 01:19:56");
INSERT INTO `users` VALUES (474,"Bernardpaich","Bernardpaich","photo360@mac.com",NULL,"$2y$12$y8Ge9Q.ugbCKg8.AotL1YuEdRJ9SR5/Hx2NiMZ4r/ZXSaTfrfHL6S",NULL,NULL,NULL,NULL,492,NULL,"2024-12-01 01:19:54","2024-12-01 01:19:56");
INSERT INTO `users` VALUES (475,"Anthonylor","Anthonylor","brianmac66@icloud.com",NULL,"$2y$12$RvZVahIfiHJlZf3u3AB.MOy7h6QK5q8ry32.mJm7dtf/larNyz7v6",NULL,NULL,NULL,NULL,493,NULL,"2024-12-01 01:32:05","2024-12-01 01:32:07");
INSERT INTO `users` VALUES (476,"DonaldREX","DonaldREX","jhawk3@prodigy.net",NULL,"$2y$12$ZX4lRxx0j/i2qGEKLm20aeJiOArp0FJFGqSgYOebcEGviGpjjAXfm",NULL,NULL,NULL,NULL,494,NULL,"2024-12-01 01:41:11","2024-12-01 01:41:13");
INSERT INTO `users` VALUES (477,"Allenbag","Allenbag","t.inachan0615@gmail.com",NULL,"$2y$12$WrxTBJ4t.OTVCAwwjzSwwu1tlcmTrjGpRW6.YYpzrnu.NEkRuhMDW",NULL,NULL,NULL,NULL,495,NULL,"2024-12-01 01:42:12","2024-12-01 01:42:14");
INSERT INTO `users` VALUES (478,"Michael David Johns","onset005@gmail.com","onset005@gmail.com","2024-12-01 01:44:55","$2y$12$nITzBVtsVhNCIQ9z4/d/iur7w2YG8hw.fDRQhii49a1HnyjkfkccG","eyJpdiI6IlAvd2xhaG4wbk1BL1BLelRoMWkrbnc9PSIsInZhbHVlIjoic1B4VEhwZmtxWllobjVUU3R4cDAxYW8rSHpyelRDOEU4Zlk2WmVRNk9qUT0iLCJtYWMiOiI3YjE4YjZmYmQzMzRiZDZhNzgwNzM0OWJlNzQ2MjBjMTQ3ZDg4MGQyZDUzNTYwMTc5YTU0ZWYxNDkyMGIxZTkwIiwidGFnIjoiIn0=","eyJpdiI6IlYzcXFSMUZJcEtQWGtValU3ZldNMGc9PSIsInZhbHVlIjoiWTdFYkdvOGpJUDd2bXVPelJWSWNjeXFyZWJ3TG15NEhiUGIzYk1rR1BnMVNZd0djdUdZSGV2L0RtRnNYVnljNlR0VU1TS0xOQlVVTDg3czVRYW5SeFI4ZEZnM3k1dmtBWlJGak1IbGZCM29ZdjlHTld3MUxKZ1VVa3MyMjhmd2c2aXhiNFFQZGVsaWRBNWVJNjRSaVhYb1NBWjJKWjBVemp3b0tKQlNzbStBSURrOEVxYUY4R2s2VklRcmFRVG9qVWJzY2g3bk9FNzBROFBoQ0plK0Zpc1RXbTdFSnFEOTFTYkZBYWZ0dDRzR0ZwL0JqOXBraXVmbVNHenlBK2EzeXg1YnZ1d2RYN2hlYUlQeEZkNjRkL0E9PSIsIm1hYyI6IjYxMTBhMzQxNWExMTcwMTkwZTU4OGZhNDI2NGEzNTdjYTI4Mzg0Zjg4N2UyY2YwMjM4MmM5NDRhOTY2OTM3OGQiLCJ0YWciOiIifQ==","2024-12-01 01:47:00",NULL,497,NULL,"2024-12-01 01:44:19","2024-12-01 01:54:14");
INSERT INTO `users` VALUES (479,"Jessegah","Jessegah","gabyraux@hotmail.com",NULL,"$2y$12$wFdrEznJprFQfLZ60AX5s.xVXXazvmSU33fVYkLss6f0dL197lbt.",NULL,NULL,NULL,NULL,498,NULL,"2024-12-01 02:16:21","2024-12-01 02:16:24");
INSERT INTO `users` VALUES (480,"CharlesThulp","CharlesThulp","mckenzie.bailey14@aol.com",NULL,"$2y$12$UM6qayQ7b7p9L7elByBoluCBdH23gHcQmFd8hY2J3AQXKI3Ho2wIu",NULL,NULL,NULL,NULL,499,NULL,"2024-12-01 03:44:58","2024-12-01 03:45:00");
INSERT INTO `users` VALUES (481,"JamesSot","JamesSot","maxgcohen77@gmail.com",NULL,"$2y$12$JfaAflgYj1iGSC6JiXiP2OSGxvh3g7BRpolXuGchIKTrVjRImcS1a",NULL,NULL,NULL,NULL,500,NULL,"2024-12-01 04:15:54","2024-12-01 04:15:56");
INSERT INTO `users` VALUES (482,"Georgesutle","Georgesutle","clint_fitzwater@yahoo.com",NULL,"$2y$12$fUH8j168OIYuJy8wVpQwROGsY5DKuj0g0aCyd8gET8Q8WJRdeh35G",NULL,NULL,NULL,NULL,501,NULL,"2024-12-01 04:35:32","2024-12-01 04:35:34");
INSERT INTO `users` VALUES (483,"Williamgok","Williamgok","morrice.sparwasser2004@gmail.com",NULL,"$2y$12$.zgm.annVs9q45KzoN6iFu8Daa.oUo57de5lNMpUmW2Z6vZnXvA92",NULL,NULL,NULL,NULL,502,NULL,"2024-12-01 04:45:09","2024-12-01 04:45:11");
INSERT INTO `users` VALUES (484,"Lloydadock","Lloydadock","joyincolours.yyc@gmail.com",NULL,"$2y$12$bBudrcunTYuCHMCsgQXV4eJWztmgIj9M7ITDl8q8/Rmk8kJyrrwE.",NULL,NULL,NULL,NULL,503,NULL,"2024-12-01 05:13:35","2024-12-01 05:13:37");
INSERT INTO `users` VALUES (485,"WillieWopay","WillieWopay","wbdchoice@gmail.com",NULL,"$2y$12$wQXmbWDRpClnz/CIz3cUeulEgC8k3TLG8fPETMKQdw2yKFTJibwOW",NULL,NULL,NULL,NULL,504,NULL,"2024-12-01 05:25:08","2024-12-01 05:25:09");
INSERT INTO `users` VALUES (486,"William banda","symilx","wb76180@gmail.com","2024-12-01 05:40:08","$2y$12$cdqMaFRwvHogweA1vf0Xie91bLywd/oRYaR12orPPpeQEzqVUlREW",NULL,NULL,NULL,NULL,505,"profile-photos/eXZUPAso6gASM36IIqzTsRCVaIS8KnvooMGcJ9k2.png","2024-12-01 05:29:30","2024-12-01 05:40:08");
INSERT INTO `users` VALUES (487,"DoyleBruck","DoyleBruck","pheglin@yahoo.com",NULL,"$2y$12$D/pOYvWJUgI9fjut5iZgHOP2HwFEvqlnLx22GP8ogZQaiC/W1ppJy",NULL,NULL,NULL,NULL,506,NULL,"2024-12-01 05:35:56","2024-12-01 05:35:57");
INSERT INTO `users` VALUES (488,"AndrewTenty","AndrewTenty","nickzaichuk@gmail.com",NULL,"$2y$12$W9/bUqx.fWiH2dBDR9Rwie1Soyoq8vFH.FxYOXoYqeXCNVG1h2vzm",NULL,NULL,NULL,NULL,507,NULL,"2024-12-01 05:45:43","2024-12-01 05:45:45");
INSERT INTO `users` VALUES (489,"Russellcig","Russellcig","andiayres@rocketmail.com",NULL,"$2y$12$TIB.W7q7DMi1cGTFjuEJMO9HnUFHX0gPDkoNSZf/CYsTzxLIzB6ty",NULL,NULL,NULL,NULL,508,NULL,"2024-12-01 06:03:32","2024-12-01 06:03:34");
INSERT INTO `users` VALUES (490,"Dariomen","Dariomen","bflady615@hotmail.com",NULL,"$2y$12$m71x8QeFsNhevgy1S7hldO4gwrstMSVxoAHUef9ZPfmgvyjz9Dg1e",NULL,NULL,NULL,NULL,509,NULL,"2024-12-01 06:15:24","2024-12-01 06:15:26");
INSERT INTO `users` VALUES (491,"MiguelBolla","MiguelBolla","evolo001@fiu.edu",NULL,"$2y$12$CokOhTaQPAqvSCaA9a8RmeFARFPLg.igfn/Vug9sbMAUK9C7Lcyzu",NULL,NULL,NULL,NULL,510,NULL,"2024-12-01 06:20:02","2024-12-01 06:20:04");
INSERT INTO `users` VALUES (492,"Aaronnak","Aaronnak","dbmc65@comcast.net",NULL,"$2y$12$J1A4RbJ0pobp7cgSmIAYFeh8HmAxl/iHMxJS3YWNQaD9W7BadHDUu",NULL,NULL,NULL,NULL,511,NULL,"2024-12-01 06:24:20","2024-12-01 06:24:22");
INSERT INTO `users` VALUES (493,"Briancop","Briancop","hogsettm@yahoo.com",NULL,"$2y$12$FyXPXneGwsjDJVSixETUqebV2Cp0N2GhCT/T1DQas203w697nAF8a",NULL,NULL,NULL,NULL,512,NULL,"2024-12-01 06:32:14","2024-12-01 06:32:20");
INSERT INTO `users` VALUES (494,"Peterlaurf","Peterlaurf","campx3@sbcglobal.net",NULL,"$2y$12$u2/wergM6LGkePqeCvWDieIt39KGOeng4JkJSzc2eORc5uqd/mre.",NULL,NULL,NULL,NULL,513,NULL,"2024-12-01 06:35:21","2024-12-01 06:35:22");
INSERT INTO `users` VALUES (495,"Hermanfelve","Hermanfelve","bullard123@comcast.net",NULL,"$2y$12$8xqiYLRII8lkbJCSq0qg4uN5b8dhVopF/07qockRrQqlRSdbWVzwK",NULL,NULL,NULL,NULL,514,NULL,"2024-12-01 06:43:03","2024-12-01 06:43:05");
INSERT INTO `users` VALUES (496,"Jefferynax","Jefferynax","tylerstock800@gmail.com",NULL,"$2y$12$mncAf6nmC7a06NdA4ddZreE8EuZpGVyyt9h4DDgrLsaObpqVUb/9i",NULL,NULL,NULL,NULL,515,NULL,"2024-12-01 06:46:05","2024-12-01 06:46:07");
INSERT INTO `users` VALUES (497,"Ignaciouness","Ignaciouness","the6vs@aol.com",NULL,"$2y$12$ZqtXQcaqYYneXbUhe8I0P.Z1oaipJFge9ml/goAXAYiGZpP5O2HkW",NULL,NULL,NULL,NULL,516,NULL,"2024-12-01 06:53:25","2024-12-01 06:53:26");
INSERT INTO `users` VALUES (498,"Rich LaBoy","TrafficMonsTer","trafficmonstersmail@gmail.com","2024-12-02 17:16:38","$2y$12$Aos6TUEiR42u0cRtW7fxLu6147X0JPL5aWKQEhB67diX4GLTcuyD6",NULL,NULL,NULL,NULL,517,NULL,"2024-12-01 07:08:04","2024-12-02 17:16:38");
INSERT INTO `users` VALUES (499,"Davidwhaxy","Davidwhaxy","mr.hunter84@yahoo.com",NULL,"$2y$12$f5V618RnM.2.u5SIdNI.1.oOFiSNb3Y4XOnlytkV3Et5c3sOx8.YS",NULL,NULL,NULL,NULL,518,NULL,"2024-12-01 07:13:43","2024-12-01 07:13:45");
INSERT INTO `users` VALUES (500,"BobbyFlini","BobbyFlini","ecyates@msn.com",NULL,"$2y$12$vZzOjK7VoEcGhVOVs30vC.6z4DkmG957WnzFoHTtLhb1.W9rmHDXe",NULL,NULL,NULL,NULL,519,NULL,"2024-12-01 07:19:58","2024-12-01 07:19:59");
INSERT INTO `users` VALUES (501,"WillieMUP","WillieMUP","mandy_choens@yahoo.com",NULL,"$2y$12$asN4xEwtDW5u247p8BByLu/XmsI5Q2Es9fFqRtmLAMHzoK1nliguq",NULL,NULL,NULL,NULL,520,NULL,"2024-12-01 07:21:18","2024-12-01 07:21:20");
INSERT INTO `users` VALUES (502,"AlbertRhino","AlbertRhino","kylearnold@verizon.net",NULL,"$2y$12$ujJ75zWWdcM3FpAYGLY7BOd5PDlZKw4SnTtvX8X7.qGdTAoh93qNK",NULL,NULL,NULL,NULL,521,NULL,"2024-12-01 07:42:32","2024-12-01 07:42:33");
INSERT INTO `users` VALUES (503,"RolandJeala","RolandJeala","homedocgmbh@gmail.com",NULL,"$2y$12$pCwtirJGPBGJXSIqEefD1esxszGIIOxA5q8idXi0ogP2xtf4NW982",NULL,NULL,NULL,NULL,522,NULL,"2024-12-01 07:42:50","2024-12-01 07:42:51");
INSERT INTO `users` VALUES (504,"Cashpro03","Cashpro","epiceditz129@gmail.com",NULL,"$2y$12$SvA75oOZzO9sB90tKrWOMulqQVsEFu2CAL2JXi7PkHGZ3pXSXIFHW",NULL,NULL,NULL,"6dLgKwtfECplaqTbRNfYkVDLRVjknKrxJKGYlD2OizSPiFEPkYcWWXbVlAKL",523,NULL,"2024-12-01 08:07:52","2024-12-01 08:07:53");
INSERT INTO `users` VALUES (505,"Ignaciomuh","Ignaciomuh","hill5467@bellsouth.net",NULL,"$2y$12$OP2h1JaDiEvfmoYqkCiqYOe/nPEckHRMl4BKkg8GU4MmVXcqscDBS",NULL,NULL,NULL,NULL,524,NULL,"2024-12-01 08:16:08","2024-12-01 08:16:10");
INSERT INTO `users` VALUES (506,"DavidBug","DavidBug","salmaabda33@gmail.com",NULL,"$2y$12$RUYrYpOROTOSNdgGr9oFBu9X6KF6ZTg2LqqQ68bfdqvJzMkTkCKsW",NULL,NULL,NULL,NULL,525,NULL,"2024-12-01 08:41:11","2024-12-01 08:41:12");
INSERT INTO `users` VALUES (507,"JamesaderE","JamesaderE","maggiearias-mk@hotmail.com",NULL,"$2y$12$a7r4ECqDlEQx7O3CP3/cm.RnVC0qHRD5xFbVpy.baGn4fwIN9YLhq",NULL,NULL,NULL,NULL,526,NULL,"2024-12-01 08:48:34","2024-12-01 08:48:36");
INSERT INTO `users` VALUES (508,"Lesterred","Lesterred","aliabda9922@gmail.com",NULL,"$2y$12$6iNV3cZyyZAncQDvS/SAO.LdQsYxsgIyQtyrD2HiC7MryCUQvxcou",NULL,NULL,NULL,NULL,527,NULL,"2024-12-01 08:50:33","2024-12-01 08:50:35");
INSERT INTO `users` VALUES (509,"KevinNap","KevinNap","martin.brunner95@gmail.com",NULL,"$2y$12$lQGD9H2VAFYet8SozQdIouiuybA/51xkAcOxOyT/eVLXIMUZDe9jm",NULL,NULL,NULL,NULL,528,NULL,"2024-12-01 08:58:59","2024-12-01 08:59:01");
INSERT INTO `users` VALUES (510,"Jamesfaify","Jamesfaify","simonbarrington8@hotmail.com",NULL,"$2y$12$GyxysZWxPl0CcTyIbTcJOe3ylp1xQwidzC7O6q8gmB3QNFh41JYOO",NULL,NULL,NULL,NULL,529,NULL,"2024-12-01 09:17:10","2024-12-01 09:17:12");
INSERT INTO `users` VALUES (511,"WillieSmaTa","WillieSmaTa","barnabas.ambetter@arisecapitalmgmt.com",NULL,"$2y$12$GQ7yRgX6FFBLZ6SXQc/d0uBpT9D1pbrlABmB44vv7i5lm6M0RboHy",NULL,NULL,NULL,NULL,530,NULL,"2024-12-01 09:17:15","2024-12-01 09:17:16");
INSERT INTO `users` VALUES (512,"MARTHA GYAU BAFFOUR","Angelsun","baffouaa32@gmail.com",NULL,"$2y$12$iiIKVA00G5F6x2XRZwSyqOMSMJfkPmCdzoGvW5b9Fkxx8ujZAZoyG",NULL,NULL,NULL,NULL,531,NULL,"2024-12-01 09:20:48","2024-12-01 09:20:48");
INSERT INTO `users` VALUES (513,"JamesChect","JamesChect","stacyg1000@comcast.net",NULL,"$2y$12$XgkUPqu8RY8qOcPGNv0ciezNmmmogMNT3ZNqYrcG1QVl556ic6juS",NULL,NULL,NULL,NULL,532,NULL,"2024-12-01 09:30:41","2024-12-01 09:30:42");
INSERT INTO `users` VALUES (514,"JosephVoisk","JosephVoisk","jenniegarrison@comcast.net",NULL,"$2y$12$Nv7Brwxh7LFJP1Hus9ZFGO7qhw1WKDyzJKqFbW1lLMZDsJIht6L0S",NULL,NULL,NULL,NULL,533,NULL,"2024-12-01 09:46:26","2024-12-01 09:46:30");
INSERT INTO `users` VALUES (515,"Ernestjem","Ernestjem","victor.kayode@arisecontractors.com",NULL,"$2y$12$E4glHRnWPt7KQJ3no.HBzuvhPRy869HdJcOcSV348sxc7ugEvNKUq",NULL,NULL,NULL,NULL,534,NULL,"2024-12-01 09:58:28","2024-12-01 09:58:29");
INSERT INTO `users` VALUES (516,"Rodneymal","Rodneymal","w.packard@packardmachinery.com",NULL,"$2y$12$d9Tp8XtKeCsCAD6IEHnhE.n9ZB4UntCOy4RIOJ6Iv8Ao/PBAOnlp2",NULL,NULL,NULL,NULL,535,NULL,"2024-12-01 10:18:04","2024-12-01 10:18:06");
INSERT INTO `users` VALUES (517,"Gilbertanept","Gilbertanept","joanneuler@gmail.com",NULL,"$2y$12$YDbay9HL0fC7Hk/aQoHRg.gpOAlPHfxEOW/.7k7nlnEDDI/ztdKlW",NULL,NULL,NULL,NULL,536,NULL,"2024-12-01 11:19:42","2024-12-01 11:19:43");
INSERT INTO `users` VALUES (518,"FrancisTidge","FrancisTidge","lewa.owolabi@arise.homes",NULL,"$2y$12$JoeoJatOgtBZF87Tf65nZum9TQLG5410vvbB5f/Q9idizeNcAWy8S",NULL,NULL,NULL,NULL,537,NULL,"2024-12-01 11:32:42","2024-12-01 11:32:43");
INSERT INTO `users` VALUES (519,"Timothyhem","Timothyhem","o.max@maxmachinery.com",NULL,"$2y$12$btfL9MonYpqL2EbSpC9XtO7eV7qzHQWNTliKxOCzMDHseXQ6BGX3e",NULL,NULL,NULL,NULL,538,NULL,"2024-12-01 11:42:17","2024-12-01 11:42:18");
INSERT INTO `users` VALUES (520,"Jimmygrink","Jimmygrink","amznebook.ppc@staffshaw.com",NULL,"$2y$12$pf/gyGaNEA8Iw6WnlB5Fz.shVLTpEIpEmoStBeWXOEx/M7JdvngNq",NULL,NULL,NULL,NULL,539,NULL,"2024-12-01 11:51:35","2024-12-01 11:51:37");
INSERT INTO `users` VALUES (521,"Alfonsogop","Alfonsogop","chris@smart1marketing.com",NULL,"$2y$12$Sls.rUpUKs/gCzgUWcK5e.pSQ6s2rSwwjy16qA6VSPc7BZa/teoqa",NULL,NULL,NULL,NULL,540,NULL,"2024-12-01 12:01:19","2024-12-01 12:01:21");
INSERT INTO `users` VALUES (522,"Arthurcaf","Arthurcaf","dariussale@yahoo.com",NULL,"$2y$12$JHv31rJ6.xm/KRULKnXIc.GStxpkeG9foFJrir5uoN55./gTQasMC",NULL,NULL,NULL,NULL,541,NULL,"2024-12-01 12:20:00","2024-12-01 12:20:02");
INSERT INTO `users` VALUES (523,"Tikyda","fabimatik","bonusforproduct@gmail.com","2024-12-01 12:47:42","$2y$12$tKIaoeczwvnDdS4yy19hqO6kCI8KWOSfdPK7N2tvj4AIk7Nnh3wmW",NULL,NULL,NULL,NULL,542,NULL,"2024-12-01 12:34:50","2024-12-01 12:47:42");
INSERT INTO `users` VALUES (524,"FrancisSlimi","FrancisSlimi","kolbe.we@gmail.com",NULL,"$2y$12$1jnhzkkNv9QO0yWGbbguD.q2LlvOvSqmgj75tkJMPPIxlKoRzZnXe",NULL,NULL,NULL,NULL,543,NULL,"2024-12-01 12:36:00","2024-12-01 12:36:01");
INSERT INTO `users` VALUES (525,"Robertoovala","Robertoovala","marcin.pawlowski.ctr.aplos@outlook.com",NULL,"$2y$12$PCCp/0G3Db.1/G./RwFQBert3k43rlTF7.lBeGfuTv2UyVe7nppeu",NULL,NULL,NULL,NULL,544,NULL,"2024-12-01 12:46:36","2024-12-01 12:46:37");
INSERT INTO `users` VALUES (526,"RonaldNon","RonaldNon","rogerbo@aol.com",NULL,"$2y$12$eN.BzR6lxAudWKHXuxgSr.jq72ur2YEa70vqhSaZPsX37OG682vb6",NULL,NULL,NULL,NULL,545,NULL,"2024-12-01 12:58:20","2024-12-01 12:58:23");
INSERT INTO `users` VALUES (527,"RufusPex","RufusPex","mitch@aplos.com",NULL,"$2y$12$WeqByVhPZRQb.K6RMequG.F0MvgDJWLte8I9/yO9oeLW.WDkL5Xim",NULL,NULL,NULL,NULL,546,NULL,"2024-12-01 13:10:07","2024-12-01 13:10:09");
INSERT INTO `users` VALUES (528,"Daniyal Sikandar","daniyalsikandar","daniyalsikandar@rocketmail.com",NULL,"$2y$12$FA8FsD63e6qk34Lhb1jaue7eajJkdPter0yMYiZgv9Y1dj5./oaj6",NULL,NULL,NULL,"e8Zxf8UWJYhjIoREcbzMLEza2qz0O6EL6qzl5nWQc5xC2KvGwdf6jg9iSH9i",547,NULL,"2024-12-01 13:29:30","2024-12-01 13:29:31");
INSERT INTO `users` VALUES (529,"Thomasnub","Thomasnub","barb.a.cady@gmail.com",NULL,"$2y$12$ZTppIXNgF9K5DS7pa4ZjmOANKDqMqPK8e5P0gnZLhyoCIBn6kPgji",NULL,NULL,NULL,NULL,548,NULL,"2024-12-01 13:33:03","2024-12-01 13:33:09");
INSERT INTO `users` VALUES (530,"David Clark","brahimeaffan@gmail.com","brahimeaffan@gmail.com","2024-12-01 14:48:33","$2y$12$9KQj0DGbG4XrEgWK1GDQLO2QrdPcCCqBBDDNXRd/.MgEp1.CXRmM.",NULL,NULL,NULL,NULL,549,NULL,"2024-12-01 14:47:00","2024-12-01 14:48:33");
INSERT INTO `users` VALUES (531,"daniel jayawardane","danny99","mediumpizza1@gmail.com","2024-12-01 17:59:31","$2y$12$S8Dcc8OpST8cPBMRPG9N9eXD2dew4xdpz5cGWISclWndoWZ3M7J.S",NULL,NULL,NULL,NULL,550,NULL,"2024-12-01 17:58:26","2024-12-01 17:59:31");
INSERT INTO `users` VALUES (532,"Jovan Briggs","billionbriggs@gmail.com","billionbriggs@gmail.com","2024-12-02 08:49:43","$2y$12$W6vBQgynORl46s2kB9zDy.Q.DBIzyzc1ZkZyT9mnZMcYapYRTSQZS",NULL,NULL,NULL,NULL,551,NULL,"2024-12-02 08:45:51","2024-12-02 08:49:43");
INSERT INTO `users` VALUES (533,"MiguelGaike","MiguelGaike","kertyucds@onet.eu","2024-12-02 14:56:28","$2y$12$gpYK/ZPqA7PKFrzXAfGHY.RFX3RZi3vPaKxdwG2T41/D2/yZ6A4Pu",NULL,NULL,NULL,NULL,552,NULL,"2024-12-02 14:51:41","2024-12-02 14:56:28");
INSERT INTO `users` VALUES (534,"Evacuator","Evacuator","dariasavina2001@gmail.com",NULL,"$2y$12$ea/1RQpIsDjIB.UdC1QajeaULFn6TIsCoJ01ELoTcJNYOHDJHU/yi",NULL,NULL,NULL,NULL,553,NULL,"2024-12-02 18:19:00","2024-12-02 18:19:02");
INSERT INTO `users` VALUES (535,"Richard Bebee","richbbom","rcbebee@gmail.com","2024-12-03 00:13:43","$2y$12$.lUeJ7H6QtEfE9P0pZdYy.MDyx4fqCP6Ay2xKAGReXrwQhQkn2BGG",NULL,NULL,NULL,NULL,554,"profile-photos/AufdXrXidjASASJ8HsBu1puxjfYl8ndrJZrkBaCS.jpg","2024-12-03 00:12:14","2024-12-03 00:15:31");
INSERT INTO `users` VALUES (536,"Obakeng Ngawethu sibanda","obkgii","obakengsibanda04@gmail.com",NULL,"$2y$12$VqCpwN.b0YeSuQ1c/MXZiuEaMjJ1DIkoC1tRFb.Uh5RFGdAHoBbPm",NULL,NULL,NULL,NULL,555,NULL,"2024-12-03 00:35:00","2024-12-03 00:35:01");
INSERT INTO `users` VALUES (537,"Brent Christian","sundaygolfer74","bchristian0425@gmail.com","2024-12-03 02:59:38","$2y$12$C.MhVqnI8cRMtQLwhnWz3OYVFN.WY9qYjbp/tMu5l.7xbp0GhskcK",NULL,NULL,NULL,NULL,556,NULL,"2024-12-03 02:00:14","2024-12-03 02:59:38");
INSERT INTO `users` VALUES (538,"Steven Hunt","stevenhunt2024@gmail.com","stevenhunt2024@gmail.com","2024-12-03 02:33:55","$2y$12$pFvlMj3A.3Di3vM8d2UAfeo6btqD5PVGMuSvEBi.CVGm9hxtwxciy",NULL,NULL,NULL,NULL,557,NULL,"2024-12-03 02:32:54","2024-12-03 02:33:55");
INSERT INTO `users` VALUES (539,"Heehaw","heehaw","heehawaustintx@gmail.com",NULL,"$2y$12$ebtpuTWINSabg7e1G31B/.jV9BRQZDNZMGulOZ4dkEw8LIUKY4gda",NULL,NULL,NULL,NULL,558,NULL,"2024-12-03 03:40:07","2024-12-03 03:40:08");
INSERT INTO `users` VALUES (540,"senthil","justanoob","iimjustanoob@gmail.com","2024-12-03 06:28:51","$2y$12$2lBrsZ8VezjkRWxLeDJ6/OKoCpjCL2X7nIVwd.QZNhjOy88zLuIIS",NULL,NULL,NULL,"cnAziQZ0hv4xSgDgxZXKjjhgROOBBibImj22hHNuNNiL8GbxwHdayFq4CKXj",560,NULL,"2024-12-03 06:16:42","2024-12-03 06:29:34");
INSERT INTO `users` VALUES (542,"ahamed","sha","ahamedsharock@gmail.com","2024-12-03 10:48:26","$2y$12$6xU6MB1DPLh2bPPHRlaXJODW4Hche67xGmo5kd0T8MWLtYoGgef/W",NULL,NULL,NULL,NULL,562,NULL,"2024-12-03 10:48:01","2024-12-03 10:48:26");
INSERT INTO `users` VALUES (543,"Safiyfese","Safiyfese","alexpa65@fvmaily.com",NULL,"$2y$12$AQLAun3wWWpiTSBrUVh4Wun8ijk5ZVZDacuf0httpXAE6XIba3p8.",NULL,NULL,NULL,NULL,564,NULL,"2024-12-03 19:09:44","2024-12-03 19:09:46");
INSERT INTO `users` VALUES (544,"shuvra aktar","perfect.false7@gmail.com","perfect.false7@gmail.com","2024-12-04 10:16:17","$2y$12$ER8ACWo8Ldin9szycGVs6eAVFEBkBKwLNr2dEOsFwouCHzW1XOwfC",NULL,NULL,NULL,NULL,565,NULL,"2024-12-04 10:08:50","2024-12-04 10:16:17");
INSERT INTO `users` VALUES (545,"Ronnie","ronnierokksmith","ronnierokk@gmail.com","2024-12-04 16:40:08","$2y$12$2O2AIBr8rurwhMTGExdTAu16TerGATF74BeU8wR74Hyp8OxeyWZcy",NULL,NULL,NULL,NULL,566,NULL,"2024-12-04 15:42:36","2024-12-04 16:40:08");
INSERT INTO `users` VALUES (546,"John  Smith","John360","johnsmithking200@gmail.com","2024-12-04 18:30:18","$2y$12$kNR0.htsM/VqR14H8HTKt.78DiwU/1iDfKM8F62xn51m1.MX1mYVK",NULL,NULL,NULL,NULL,567,NULL,"2024-12-04 18:29:45","2024-12-04 18:30:18");
INSERT INTO `users` VALUES (547,"Tharold","tharold","clicktofortunecom@gmail.com",NULL,"$2y$12$bDBUg9uSGyJ4JznVnQSu4eUmC/Zjsmtsre/yeuiP2ZWRA3G/IMYd2",NULL,NULL,NULL,NULL,568,NULL,"2024-12-04 21:16:36","2024-12-04 21:16:37");
INSERT INTO `users` VALUES (548,"Gustavo Adolfo Lopez","galivan1972","gustavolopez2040@gmail.com",NULL,"$2y$12$qgFNp4HddXtxGkc7i3h9m.gby2OpRxhx9U2c1lq6p24Tq73ryhzL6",NULL,NULL,NULL,NULL,569,NULL,"2024-12-05 05:49:43","2024-12-05 05:49:44");
INSERT INTO `users` VALUES (549,"Maria Luisa Cama Ferrer","canarias","negociosmil@gmail.com","2024-12-05 10:43:45","$2y$12$iW/3EvhoF7OCl5o2By5Ux.6lGlrDZuR87sWObnU1zwWJK/7WRUQa.",NULL,NULL,NULL,NULL,570,NULL,"2024-12-05 10:42:24","2024-12-05 10:43:45");
INSERT INTO `users` VALUES (550,"Chris Holroyd","homebizmarketingpro","homebizmarketingsafelist@gmail.com","2024-12-05 11:24:14","$2y$12$QO39VCOmzY.LPW9QWvHjA.ZZy9grkI9nV.GUIQE5F1yNrtZqO9G3S",NULL,NULL,NULL,NULL,571,"profile-photos/6CC5lq1y8pbqyGaXeH5LZqvQ94HcsLqnp9wLIOGC.jpg","2024-12-05 11:22:34","2024-12-05 11:24:46");
INSERT INTO `users` VALUES (551,"Amanda Leonardo dos Santos","Amanda Leonardo dos Santos","as6926131@gmail.com",NULL,"$2y$12$hCwEZsnXi6mUUZvdT.KGheHAMSdy2pA9ekoItfLr7ON6o32HdoDRS",NULL,NULL,NULL,NULL,572,NULL,"2024-12-05 13:33:57","2024-12-05 13:33:57");
INSERT INTO `users` VALUES (552,"Leah Dowell","LeahD","ngyrll4@gmail.com",NULL,"$2y$12$VfwcIlvK3PoYO3LGOzeYbO8rDRoFDVHOMATEwc5E3S39SUIzsFo5i",NULL,NULL,NULL,NULL,573,NULL,"2024-12-05 15:06:35","2024-12-05 15:06:36");
INSERT INTO `users` VALUES (553,"Farouk","Faroukwr","faroukwrbusiness@gmail.com","2024-12-05 15:15:23","$2y$12$zqV4.HBskVfxo1Udmhrq0ejvequS2VcouPE57ovpC6bzUHpUh5LOG",NULL,NULL,NULL,NULL,575,NULL,"2024-12-05 15:14:53","2024-12-05 15:16:22");
INSERT INTO `users` VALUES (554,"Ludivina","Divi","ludigario@gmail.com","2024-12-06 04:04:45","$2y$12$ng0Fif2o6rqu.Z04G/Bq8uZCCM/506b7BqbbbmgmcfljZh3fzta6O",NULL,NULL,NULL,NULL,576,NULL,"2024-12-06 03:33:54","2024-12-06 04:04:45");
INSERT INTO `users` VALUES (555,"Sabir Younas","zayinsabir21@gmail.com","zayinsabir21@gmail.com","2024-12-06 05:26:47","$2y$12$TZZis6yfuPsPJOvLO/3KUOt9f56Pk1Oosdfk8kwdqfEkJPmjVlIfe",NULL,NULL,NULL,NULL,577,NULL,"2024-12-06 05:25:57","2024-12-06 05:26:47");
INSERT INTO `users` VALUES (556,"Javier","Javier73","libran73@gmail.com","2024-12-06 13:26:36","$2y$12$/cVANCP9fgxCNxOuJUwUEuhH5i6VWvulLRfnQNDJW/Kz2afPZ5wnC",NULL,NULL,NULL,NULL,578,NULL,"2024-12-06 13:25:54","2024-12-06 13:26:36");
INSERT INTO `users` VALUES (557,"nordland","nordland","planetofkrypton@gmail.com","2024-12-06 16:09:55","$2y$12$PztJlUKNWRRnNCtRkbv0zO4HqI8BImFiCPhxwMKVPuIebFGFZ9GkS",NULL,NULL,NULL,NULL,579,NULL,"2024-12-06 16:09:00","2024-12-06 16:09:55");
INSERT INTO `users` VALUES (558,"Ramya","ramyars","kekid91708@ykmov.com","2024-12-06 16:39:47","$2y$12$/KA1fzcPpamtWjLA2xoKl.J5vo8tE4F.utZVmPLN8osrP51qXrk.y",NULL,NULL,NULL,NULL,580,NULL,"2024-12-06 16:38:35","2024-12-06 16:39:47");
INSERT INTO `users` VALUES (559,"CharlesEvasp","CharlesEvasp","petrp3308@gmail.com","2024-12-06 17:26:16","$2y$12$jSsJ91c9wm3JZ0Ab6Y1paeMUB/gECQTp8FMbU9MLTnz4JbFWgP2bq",NULL,NULL,NULL,NULL,581,NULL,"2024-12-06 17:15:24","2024-12-06 17:26:16");
INSERT INTO `users` VALUES (560,"Abdul-hakeem Habeebullah Olawale","Olawale","abdulhakeemhabeebullahiolawale@gmail.com","2024-12-06 17:19:28","$2y$12$kQy7IK22oUmeqDq3KKZlzuUQn8tkztoF3dXqP1X7eRkUtMYb9akF.",NULL,NULL,NULL,NULL,582,NULL,"2024-12-06 17:18:14","2024-12-06 17:20:34");
INSERT INTO `users` VALUES (561,"Kerry Kennedy","kerrypkennedy67@gmail.com","kerrypkennedy67@gmail.com","2024-12-06 21:49:09","$2y$12$dg4BLvYeclo8ZUN6Buzfy.6HJESGCPsqtdS78f/YTmZDYqp3ZI1RO",NULL,NULL,NULL,NULL,585,NULL,"2024-12-06 21:48:22","2024-12-06 21:49:32");
INSERT INTO `users` VALUES (562,"Nicoleta","Nicoleta78","safelistacount@gmail.com","2024-12-06 23:36:11","$2y$12$rOYjv97X9kxzetWezxXNSOUPWVrKWGBhLwU1miW6x9iaIT83UWWpm",NULL,NULL,NULL,NULL,586,NULL,"2024-12-06 23:35:45","2024-12-06 23:36:11");
INSERT INTO `users` VALUES (563,"DANIELE APARECIDA DA SILVA","Danieleoficial","danielevocal@gmail.com","2024-12-07 02:23:40","$2y$12$qpjOwp8yJhlVjR0Z1KfPNOuwkDtl/xnLgapvzpHiraQ7BiAdx0pbK",NULL,NULL,NULL,NULL,587,NULL,"2024-12-07 02:22:12","2024-12-07 02:23:40");
INSERT INTO `users` VALUES (564,"Raiyan","Raiyan","affiliate.raiyan@gmail.com","2024-12-07 12:04:09","$2y$12$Xib29v7raNARYx6t8y9zNetiztNxHOl7EK5p7Qxr9NYuF5c2PRTSe",NULL,NULL,NULL,"kbhk4r5VdRGn9SG38F3hN9nbsFcwMySbTkD4ZNguyuq9Gdk8RSGAGVIWzCJd",588,NULL,"2024-12-07 07:24:32","2024-12-07 12:04:09");
INSERT INTO `users` VALUES (565,"Linda Hoknes","linhok","lennyhoknes@gmail.com","2024-12-07 08:59:33","$2y$12$G9t4I9kZ5ixCOMhkPQA2r.LDZmLrOD52cdz/fkYxfwObZu8jkVf2.",NULL,NULL,NULL,NULL,589,"profile-photos/eWgg723mC3rcoutLPWrWTLDvoHAMYN18jM6csKBE.jpg","2024-12-07 08:49:04","2024-12-07 08:59:33");
INSERT INTO `users` VALUES (566,"raiyan","raiyan20","smdraiyan20@gmail.com","2024-12-07 11:59:05","$2y$12$wrDRFkGQ6Ib.y2JHNh2fZebqq3yebN/XFoVjwRfGQUvragRigc9g2",NULL,NULL,NULL,NULL,590,NULL,"2024-12-07 11:58:41","2024-12-07 11:59:05");
INSERT INTO `users` VALUES (567,"Bob Caine","rcaine","morebitcoin4u@gmail.com","2024-12-07 15:02:02","$2y$12$7VbBdyPyjTUrXHZFro0s7.P8akB765D/bEc5wLR7a0vrydz.3RgUi",NULL,NULL,NULL,NULL,591,NULL,"2024-12-07 15:01:07","2024-12-07 15:02:02");
INSERT INTO `users` VALUES (568,"Jodie Colby","jodiews","jodiecolbycontact@gmail.com",NULL,"$2y$12$JlGfZJ5rV9AOCn9m/v7p4.aljy2EsJMDsQRzHH0AuXNuDr3JoDhum",NULL,NULL,NULL,NULL,592,NULL,"2024-12-07 17:14:22","2024-12-07 17:14:23");
INSERT INTO `users` VALUES (569,"Erik","order","safelistvault@gmail.com","2024-12-07 17:37:08","$2y$12$6IcQsp36eef0tswGJZ45aeqpxT5PfVS3RywLI8u.8yUUQxyGOpzFq",NULL,NULL,NULL,NULL,593,NULL,"2024-12-07 17:34:07","2024-12-07 17:37:08");
INSERT INTO `users` VALUES (570,"Rheal Charette","u2earnmore","marv2blast@gmail.com",NULL,"$2y$12$asGD6Ll1re/VPA2bgNx2keHA0mBLIiib2vq8LDTK6ZMxUgXVZcFLy",NULL,NULL,NULL,NULL,594,NULL,"2024-12-07 22:26:46","2024-12-07 22:26:47");
INSERT INTO `users` VALUES (571,"Eric Lafontaine","cybereric","cybercolist@gmail.com","2024-12-08 02:02:59","$2y$12$xcIvfkcatEK0E9PVy0YM7.pgLLowCPQfwWK8hAPiw5x1MQiEu56iq",NULL,NULL,NULL,NULL,595,"profile-photos/rsJiqB4e1CsPGVTQCrpX9Tc4aj5gTqC7IO8RN03Y.png","2024-12-08 01:54:21","2024-12-08 02:02:59");
INSERT INTO `users` VALUES (572,"Loretta Sanders","oppor2nities4u","lorettaknowsmarketing@gmail.com",NULL,"$2y$12$mzm1b6/qf6aGWk/oknPfkuv2e/yD4x/9RQnAKlpd7mK99/rlGXpIW",NULL,NULL,NULL,NULL,596,NULL,"2024-12-08 03:03:53","2024-12-08 03:03:53");
INSERT INTO `users` VALUES (574,"shabab shibu","jhone aldin","shababshibu91@gmail.com","2024-12-08 11:40:52","$2y$12$Agf64oQEmXg8n/vDKaOAkuqMlAOgOc9fuHWuFMFS4py//X0kbC40C",NULL,NULL,NULL,NULL,598,NULL,"2024-12-08 11:40:34","2024-12-08 11:46:12");
INSERT INTO `users` VALUES (575,"Kevin  Agee","thryn","toig.ageek@gmail.com","2024-12-08 13:47:17","$2y$12$UQCuO/8tAxjcmu3WIHTduuf5zymmZbPDctVkpnimnzmeSVUwYsu/.",NULL,NULL,NULL,NULL,601,NULL,"2024-12-08 13:46:33","2024-12-08 13:48:18");
INSERT INTO `users` VALUES (576,"Ary Wisnu Wardani","arywisnuwardani@gmail.com","arywisnuwardani@gmail.com","2024-12-08 14:08:11","$2y$12$wR08QTCImj7VcQdfYdM43OYObI2fs/CSoC6yRs.G/qwEhcngXxF/u",NULL,NULL,NULL,NULL,602,NULL,"2024-12-08 14:07:41","2024-12-08 14:08:11");
INSERT INTO `users` VALUES (577,"smarthaven","Smarthaven007","ahmadnumanllc@gmail.com",NULL,"$2y$12$NZUc7nzpUqQS28wTGh4BvO31BXozvx0Y.3bmrJsc1TCugaSPNeamO",NULL,NULL,NULL,NULL,603,NULL,"2024-12-08 15:22:14","2024-12-08 15:22:16");
INSERT INTO `users` VALUES (578,"Orangey","orange","orange582@gmail.com",NULL,"$2y$12$EW9/qoVS.ffGpjiuRdjoCOOh3B9KNbDeavxxMzs8cJjomEgRSSWhW",NULL,NULL,NULL,NULL,604,NULL,"2024-12-08 17:28:34","2024-12-08 17:28:35");
';















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