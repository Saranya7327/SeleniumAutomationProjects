package sampletestng;

class school{
	public void principal()
	{
		System.out.println("Parent class is called");
	}
	
	
}
 
class canteen extends school
{
	public void food()
	{
		System.out.println("child class is called");
	}
	
	public void principal() //Method overriding
	{
		System.out.println("method class is called");
	}
}

 class inheritanceeg extends school {
	 
 
	public static void main(String[] args) {
	
	
	canteen obj1=new canteen();
	obj1.principal();
	obj1.food();
			
	}	
		
}