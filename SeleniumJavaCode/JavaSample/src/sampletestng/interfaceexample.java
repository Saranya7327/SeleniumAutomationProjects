package sampletestng;
interface Animal {
	  public void animalSound(); // interface method (does not have a body)
	  public void sleep();
	  
	}

interface pig extends Animal{
	
	public void food();
	
}
	
	class zoo implements Animal, pig {
		
	  public void animalSound() {
	    // The body of animalSound() is provided here
	    System.out.println("The pig says: wee wee");
	  }
	  public void sleep() {
	    // The body of sleep() is provided here
	    System.out.println("Zzz");
	  }
	@Override
	public void food() {
		// TODO Auto-generated method stub
	    System.out.println("food");
	}
	}
	
public class interfaceexample {
	
		  public static void main(String[] args) {
		   zoo obj=new zoo(); // Create a Pig object
		    obj.animalSound();
		  obj.sleep();
		  obj.food();
		  }
}
