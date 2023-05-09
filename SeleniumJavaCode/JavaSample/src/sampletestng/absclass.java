package sampletestng;

abstract class shape{
	
	abstract void func();
	
	void func3()
	{
		System.out.println("parent class");
	}
}

 class circle extends shape
{

	@Override
	void func() {
		// TODO Auto-generated method stub
		
			System.out.println("Abstract class");
		
	}

	void func2()
	{
		
	}
	
	
}
public class absclass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		circle v=new circle();
		v.func();
		v.func3();
		
	}

}
