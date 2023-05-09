package sampletestng;

//park-->parent class
class park{
	public void Animal()
	{
		System.out.println("Animals");
	}

}

//kitchen-->child class
	class Kitchen extends park
	{
		public void food()
		{
			System.out.println("Food");	
		}
		
	}

// for main method
public class inheritance1 {
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Kitchen obj=new Kitchen();
		
		obj.Animal();
		obj.food();
		
		
		
		
		
	}

}
