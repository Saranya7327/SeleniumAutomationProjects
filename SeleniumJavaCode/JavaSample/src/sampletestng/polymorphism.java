package sampletestng;

public class polymorphism {
	
	
	public void run()
	{
		System.out.println("parent run");
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub

		child obj=new child();
		obj.run();
		obj.run1();
		
	}
}
	
	 class child extends polymorphism{
		
		public void run1()
		{
			System.out.println("child run");
		}
		
	}

	


