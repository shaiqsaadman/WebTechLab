using System;

namespace MidAssignment
{
    class Program
    {
        static void Main(string[] args)
        {
            Department d1 = new Department("Computer Science");

            Faculty f1 = new Faculty("Shaiq");
            Faculty f2 = new Faculty("Sadman");

            Course c1 = new Course("Sp2", 3);
            Course c2 = new Course("Java", 3);

            Section s1 = new Section("A", f1, c1);
            Section s2 = new Section("B", f2, c2);
            

            d1.AddCourse(c1, c2);

            c1.AddSection(s1, s2);
            c2.AddSection(s2, s1);

            c1.ShowInfo();
            Console.WriteLine();
            c2.ShowInfo();
            Console.WriteLine();
         
            f1.FacultyInfo();
            Console.WriteLine();
            f2.FacultyInfo();
            Console.WriteLine();


        }
    }
}
