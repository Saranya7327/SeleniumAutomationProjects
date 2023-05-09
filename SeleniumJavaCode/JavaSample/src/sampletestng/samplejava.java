package sampletestng;
public class samplejava {

	
	int i, j;
	
samplejava(int a, int b)//constructor parameterization
{
	//int a=5, b=10;
	this.i=a;
	this.j=b;
	
	int sum;
	sum=a+b;
	System.out.println("Constructor called " + sum);
	System.out.println(i);
	
}

public void function1(String name)
{
	System.out.println("Function called"+ name);
}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
	
	samplejava d=new samplejava(4,5);// passing arguments
	d.function1("Valli");
	
		
		
		
	}

}
