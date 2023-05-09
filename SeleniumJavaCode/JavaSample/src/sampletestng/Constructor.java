	package sampletestng;

public class Constructor {
	
	String name1;
	int age1;
	Constructor(String name, int age) // Parameterized contructor
	{
		
		this.name1=name;
		this.age1=age;
		System.out.println("Constructor is called");
		System.out.println("Name is " + name1 + "age is" + age1);
	}
	
	public void Test()
	{
		System.out.println("Function is called");
	}
	
	public void Test(int a)
	{
		System.out.println(a);
	}
	public void Test(int a,String name)
	{
		System.out.println(a + " " +name);
	}
	
	

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Constructor obj=new Constructor("x",6);
		obj.Test();
		obj.Test(6);
		obj.Test(5,"saranya");
		
	}

}
