<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
   <h1> Array</h1>

   <?php
  echo'<pre>';
  
  
  $array=
['school'=>
    [
      ['Class'=>
          // +================================== Class10 =============================================
      [
        ['Class10'=>
        ['ClassRoom'=>['RoomNO11','RoomNO13(Computer Science)'],], 
        'Subjects'=>['Maths','Hindi','English','Science','Social Science','Sanskrit','Computer Science'],
        'Students'=>[
                      ['Name'=>'Kalpana Thakur','RollNo'=>'1','Age'=>'15','EmailId'=>'kalpana071@gmail.com'],
                      ['Name'=>'KusamLata','RollNo'=>'2','Age'=>'15','EmailId'=>'Kusam234@gmail.com'],
                      ['Name'=>'Sushma Thakur','RollNo'=>'3','Age'=>'15','EmailId'=>'sushma839@gmail.com'],
                      ['Name'=>'Rina Kumari','RollNo'=>'4','Age'=>'16','EmailId'=>'rina377@gmail.com'],
                      ['Name'=>'Manju Thakur','RollNo'=>'5','Age'=>'15','EmailId'=>'manju287@gmail.com'],
                      ['Name'=>'Gita Kumari','RollNo'=>'6','Age'=>'15','EmailId'=>'Gita124@gmail.com'],
                      ['Name'=>'Yash Pal','RollNo'=>'7','Age'=>'16','EmailId'=>'Yashpal@gmail.com'],  
                      ['Name'=>'Sona Kumari','RollNo'=>'8','Age'=>'15','EmailId'=>'sona345@gmail.com'], 
                      ['Name'=>'Satish Kumar','RollNo'=>'9','Age'=>'16','EmailId'=>'satish6576@gmail.com'], 
                      ['Name'=>'Dharmender thakur','RollNo'=>'10','Age'=>'15','EmailId'=>'dham45546@gmail.com'],
                    ],
        'Teachers'=>[
                      ['Name'=>'Rajeev Kumar','Subject'=>'science','classTiming'=>'9:30am-10:10am','RomNo'=>'11',],
                      ['Name'=>'Santosh','Subject'=>'Hindi','classTiming'=>'10:10am-10:50am','RomNo'=>'11',],
                      ['Name'=>'Gopal','Subject'=>'Social science','classTiming'=>'10:50am-11:30am','RomNo'=>'11',],
                      ['Name'=>'Sunita','Subject'=>'English','classTiming'=>'11:30am-12:10pm','RomNo'=>'11',],
                      ['Name'=>'Palak Rana','Subject'=>'Sanskrit','classTiming'=>'12:10pm-12:50am','RomNo'=>'11',],
                                  //[Lunch time:12:50pm-1:30pm]  
                      ['Name'=>'Lekhraj','Subject'=>'Maths','classTiming'=>'1:30pm-2:10pm','RomNo'=>'11',],
                      ['Name'=>'Nitesh Kumar','Subject'=>'Computer science','classTiming'=>'2:10pm-3:00','RomNo'=>'13',],
                    ],
                  
        'Classes'=>[
                        ['Subject'=>'Science','Timing'=>'9:30am-10:10am','RomNo'=>'11','Teacher'=>'Rajeev Kumar'],
                        ['Subject'=>'Hindi','Timing'=>'10:10am-10:50am','RomNo'=>'11','Teacher'=>'Rajeev Kumar'],
                        ['Subject'=>'Social science','Timing'=>'10:50am-11:30am','RomNo'=>'11','Teacher'=>'Gopal'],
                        ['Subject'=>'English','Timing'=>'11:30am-12:10pm','RomNo'=>'11','Teacher'=>'Sunita'],
                        ['Subject'=>'Sanskrit','Timing'=>'12:10pm-12:50am','RomNo'=>'11','Teacher'=>'Palak Rana'],
                                          //[Lunch time:12:50pm-1:30pm]  
                        ['Subject'=>'Maths','Timing'=>'1:30pm-2:10pm','RomNo'=>'11','Teacher'=>'Lekhraj'],
                        ['Subject'=>'Computer science','Timing'=>'2:10pm-3:00pm','RomNo'=>'13','Teacher'=>'Nitesh Kumar'],
                      ],
        ], 
        // ==================================================Class10 ending=========================================================

        // ==================================================Class11 start=========================================================
        ['class11'=>
        ['classRoom'=>['RoomNo14','RoomNo13(Computer Science)','RoomNo15(Chem.Lab)','RoomNo17(Phy.Lab)'],],
          'subjects'=>['Maths','Chemistry','Physcics','Computer Science','English',],
          'Students'=>[
                        ['Name'=>'Sachin Kuamr','RollNo'=>'1','Age'=>'16','EmailId'=>'sachin343@gmail.com'],
                        ['Name'=>'Vivek Thakur','RollNo'=>'2','Age'=>'17','EmailId'=>'vivek58904@gmail.com'],
                        ['Name'=>'Hiamnshi Thakur','RollNo'=>'3','Age'=>'16','EmailId'=>'himanshi839@gmail.com'],
                        ['Name'=>'Meenakshi','RollNo'=>'4','Age'=>'16','EmailId'=>'Meenakshi34@gmail.com'],
                        ['Name'=>'Romesh Thakur','RollNo'=>'5','Age'=>'16','EmailId'=>'romesh985@gmail.com'],
                        ['Name'=>'Mahima','RollNo'=>'6','Age'=>'15','EmailId'=>'mahima@gmail.com'],
                        ['Name'=>'Ankit','RollNo'=>'7','Age'=>'17','EmailId'=>'ankit344@gmail.com'],  
                        ['Name'=>'Ekta','RollNo'=>'8','Age'=>'16','EmailId'=>'ekta345@gmail.com'], 
                        ['Name'=>'Jyoti','RollNo'=>'9','Age'=>'16','EmailId'=>'jyoti6576@gmail.com'], 
                        ['Name'=>'spana','RollNo'=>'10','Age'=>'16','EmailId'=>'spana45546@gmail.com'],
                        ['Name'=>'Manish Rana','RollNo'=>'11','Age'=>'17','EmailId'=>'manishrana@gmail.com'],
                        ['Name'=>'Digvijay','RollNo'=>'12','Age'=>'16','EmailId'=>'digu23@gmail.com'],
                        ['Name'=>'Ajay tahkur','RollNo'=>'13','Age'=>'16','EmailId'=>'ajayx854@gmail.com'],
                      ],
          'Teachers'=>[
                        ['Name'=>'Nishant Verma','Subject'=>'Maths','classTiming'=>'9:30am-10:30am','RomNo'=>'14',],
                        ['Name'=>'Kanchan Rawat','Subject'=>'Chemistry Theory','classTiming'=>'10:30am-11:30am','RomNo'=>'14',],
                        /*Chem.Practical */
                        ['Name'=>'Kanchan Rawat','Subject'=>'Chemistry Practical','Timing'=>'10:30am-11:30am','RomNo'=>'15(Chem.Lab)','Day'=>' Every Friday'],
                        ['Name'=>'Neelam','Subject'=>'Physcics Theory','ClassTiming'=>'11:30am-12:30pm','RomNo'=>'14',],
                      /*Phys. Practical */
                        ['Name'=>'Neelam','Subject'=>'Physcics Practical','Timing'=>'11:30am-12:30pm','RomNo'=>'17(Phy.Lab)','Day'=>'Every Friday'],
                                                                  //[Lunch time 12:30pm-1:00pm]  
                        ['Name'=>'Nitesh Kumar','Subject'=>'Computer science','classTiming'=>'1:00pm-2:00pm','RomNo'=>'13',],
                        ['Name'=>'Anita','Subject'=>'English','classTiming'=>'2:00pm-3:00','RomNo'=>'14',],
                      ], 
          'Classes'=>[
                          ['Subject'=>'Maths','Timing'=>'9:30am-10:30am','RomNo'=>'14','Teacher'=>'Nishant Verma'],
                          ['Subject'=>'Chemistry Theory','Timing'=>'10:30am-11:30am','RomNo'=>'14','Teacher'=>'Kanchan Rawat'],
                          /*Chem.Practical */
                          ['Subject'=>'Chemistry Practical','Timing'=>'10:30am-11:30am','RomNo'=>'15(Chem.Lab)','Teacher'=>'Kanchan Rawat','Day'=>'Every Friday'],
                          ['Subject'=>'Physcics Theory','Timing'=>'11:30am-12:30pm','RomNo'=>'14','Teacher'=>'Neelam'],
                          /*Phys. Practical */
                          ['Subject'=>'Physcics Practical','Timing'=>'11:30am-12:30pm','RomNo'=>'17(phy.Lab)','Teacher'=>'Neelam','Day'=>'Every Friday'],
                                            //[Lunch time:12:50pm-1:30pm]  
                          ['Subject'=>'Computer science','Timing'=>'1:00pm-2:00pm','RomNo'=>'13','Teacher'=>'Nitesh Kumar'],
                          ['Subject'=>'English','Timing'=>'2:00pm-3:00pm','RomNo'=>'14','Teacher'=>'Anita'],
                      ],                    
                    
          ],
    // ======================================================class11 end ==========================================================
    
    // ======================================================class12 Start ==========================================================

      ['class12'=>
        [
        'classRoom'=>['RoomNo.18','RoomNo.17(phy.Lab)','RoomNo.15(Chem.Lab)','RoomNo.13(Computer)'],
        'Subjects'=>['Maths','Chemistry','Physcics','Computer Science','English',],
        'Students'=>[
                      ['Name'=>'Nishant Thakur','RollNo'=>'1','Age'=>'17','EmailId'=>'nisant343@gmail.com'],
                      ['Name'=>'Shivani','RollNo'=>'2','Age'=>'17','EmailId'=>'shivani434@gmail.com'],
                      ['Name'=>'Neha','RollNo'=>'3','Age'=>'17','EmailId'=>'neha4345@gmail.com'],
                      ['Name'=>'Divya Mahajan','RollNo'=>'4','Age'=>'17','EmailId'=>'divya343@gmail.com'],
                      ['Name'=>'Sanya','RollNo'=>'5','Age'=>'17','EmailId'=>'sanya66@gmail.com'],
                      ['Name'=>'Simarn','RollNo'=>'6','Age'=>'18','EmailId'=>'simarn65@gmail.com'],
                      ['Name'=>'Arun','RollNo'=>'7','Age'=>'18','EmailId'=>'arun565@gmail.com'],  
                      ['Name'=>'Mohit','RollNo'=>'8','Age'=>'17','EmailId'=>'mohit45@gmail.com'], 
                      ['Name'=>'shushant','RollNo'=>'9','Age'=>'18','EmailId'=>'s45545@gmail.com'], 
                      ['Name'=>'Namrata','RollNo'=>'10','Age'=>'17','EmailId'=>'namrta56@gmail.com'],
                      ['Name'=>'Kanchan','RollNo'=>'11','Age'=>'17','EmailId'=>'kanchn3434@gmail.com'],
                      ['Name'=>'Khushi','RollNo'=>'12','Age'=>'18','EmailId'=>'khushi454@gmail.com'],
                      ['Name'=>'Swati','RollNo'=>'13','Age'=>'17','EmailId'=>'swati454@gmail.com'],
                    ],  
        'Teachers'=>[
                      ['Name'=>'Nitesh Kumar','Subject'=>'Computer science','classTiming'=>'9:00am-10:30am','RomNo'=>'13',],
                      ['Name'=>'Neelam','Subject'=>'Physcics Theory','ClassTiming'=>'10:30am-11:30am','RomNo'=>'18',],
                      /*Phys.Practical*/
                      ['Name'=>'Neelam','Subject'=>'Physcics Practical','Timing'=>'10:30am-11:30am','RomNo'=>'17(Phy.Lab)','Day'=>'Every Thusrday'],
                      ['Name'=>'Kanchan Rawat','Subject'=>'Chemistry Theory','classTiming'=>'11:30am-12:30pm','RomNo'=>'18',],
                      /*Chem.Practical*/
                      ['Name'=>'Kanchan Rawat','Subject'=>'Chemistry Practical','Timing'=>'11:30am-12:30pm','RomNo'=>'15(Chem.Lab)','Day'=>'Every Thusrday'],
                                        //[Lunch time 12:30pm-1:00pm]  
                    ['Name'=>'Anita','Subject'=>'English','classTiming'=>'1:00pm-2:00pm','RomNo'=>'18',],
                    ['Name'=>'Nishant Verma','Subject'=>'Maths','classTiming'=>'2:00pm-3:00pm','RomNo'=>'18',],
                    ], 
        'Classes'=>[
                        ['Subject'=>'Computer science','Timing'=>'9:30am-10:30am','RomNo'=>'13','Teacher'=>'Nitesh Kumar'],
                        ['Subject'=>'Physcics Theory','Timing'=>'10:30am-11:30am','RomNo'=>'18','Teacher'=>'Neelam'],
                        /*Phys. Practical */
                        ['Subject'=>'Physcics Practical','Timing'=>'10:30am-11:30am','RomNo'=>'17(phy.Lab)','Teacher'=>'Neelam','Day'=>'Every Thursday'],
                        ['Subject'=>'Chemistry Theory','Timing'=>'11:30am-12:30pm','RomNo'=>'18','Teacher'=>'Kanchan Rawat'],
                        /*Chem.Practical */
                        ['Subject'=>'Chemistry Practical','Timing'=>'11:30am-12:30pm','RomNo'=>'15(Chem.Lab)','Teacher'=>'Kanchan Rawat','Day'=>'EveryThursday'],
                          
                                          //[Lunch time:12:50pm-1:30pm]  
                      ['Subject'=>'English','Timing'=>'1:00pm-2:00pm','RomNo'=>'18','Teacher'=>'Anita'],
                      ['Subject'=>'Maths','Timing'=>'2:00pm-3:00pm','RomNo'=>'13(computer)','Teacher'=>'Nishant Verma'],
                    ],     
        ],
        ],
      ],
    ],
  ],
        'Subject'=>[],
        'Student'=>[],


];
                 
  
       
   


   
  print_r($array);
   ?>

</body>
</html>
<!-- $array=['school'=>['Class'=>
                      ['Class10'=>['ClassRoom'=>['RomNo11','RoomNo12'],
                      'Subject'=>['Maths','Hindi','Science','English','Social Science','Computer Science'],
                      'Student'=>[
                                  ['Name'=>'Himanshi','RollNO.'=>'1','EmailId'=>'himanshi922@gmail.com'],
                                  ['Name'=>'Kalpana','RollNO.'=>'2','EmailId'=>'kalpana071@gmail.com'],
                                ],
                      ],
                      
                     'Class+1','Class+2'],
                     'Subject','Teacher'],]; -->
