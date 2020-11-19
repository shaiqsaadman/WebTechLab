using System;

namespace MidAssignment
{
    class Course
    {
        int tSection;
        string cName;
        string cId;
        int tHour;
        Section[] sections;


        public Course()
        {   
            Console.WriteLine("Enter again!");
        }
        public Course(string courseName, string courseId, int teachingHour)
        {
            sections = new Section[50];

            cName = courseName;
            cId = courseId;
            tHour = teachingHour;
            sections = new Section[50];
            tSection = 0;
        }

        public void AddSection(params Section[] sections)
        {
            if (tSection < 50)
            {
                foreach (var section in sections)
                {
                    this.sections[tSection++] = section;
                }
            }
        }

        public void ShowInfo()
        {
            
            Console.WriteLine("Teaching hour : " + tHour);
            Console.WriteLine("Total Section :" + tSection);

            
        }


    }
}
