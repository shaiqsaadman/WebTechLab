using System;

namespace MidAssignment
{
    class Faculty
    {
        string fName;
        string fId;
        int WeeklyHour;
        int FacultyToSec;


        public Faculty()
        {
            Console.WriteLine("Enter Your ID");
            facultySec = new Section[25];
        }



        public Faculty(string fName, string fId)
        {
            fName = fName;
            fId = fId;
            WeeklyHour = 0;
            FacultyTotSec = 0;
            facultySec = new Section[10];
        }



        public void AddFacultySec(Section section)
        {
            if (temp <= 21)
            {
                facultySection[FacultyToSec++] = section;
            }
            else
                Console.WriteLine("Weekly maximum limit is 21!", section.teacher.fName);
        }



        public void FacultyInfo()
        {
            Console.WriteLine("Faculty Name :" + fName);
            Console.WriteLine("Faculty ID :" +  fId);
            Console.WriteLine("Weekly Hour :" + WeeklyHour + "Hour");
            Console.WriteLine("Assigned Sections are : ");



            for (int i = 0; i < FacultyTotSec; i++)
            {
                Console.WriteLine("Course Name:\nSection Name :", facultySection[i].course.cName, facultySection[i].sName);
            }


        }
    }
}
