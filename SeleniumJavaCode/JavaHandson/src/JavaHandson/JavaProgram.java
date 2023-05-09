package JavaHandson;

public class JavaProgram {

	//int var;
	//int var1;
	int sum;
	int x=4, y=5, z=5;
	int i=0;
	
	public  void func()
	{
		while(i<=5)
		{
			//System.out.println("While Loop executed ");
			i++;
		}
		
	
		if(x<y)
		{
			System.out.println("Function is correct");
		}
		
		else if(x!=y)
		{
			System.out.println("Function is partially correct");
		}
		else
		{
			System.out.println("Function is incorrect");
		}
		
		}
	
	
	public void func1(int var, int var1)//parameterization
	{
		sum=var+var1;
		System.out.println(sum);
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub

		int number=1;
		int num;
		String name;
		name="saranya";
		num=5;
		String na = "xa";
		float dec=(float) 6.6;
		
		
		
		System.out.println("The valus of name is" + name);
		System.out.println(number);
		System.out.println("The value of number is" + number + "The value of name is"  + na);
		//func();
		JavaProgram obj=new JavaProgram();
		obj.func();
		obj.func1(7, 8);
		
		
		
	}

}
