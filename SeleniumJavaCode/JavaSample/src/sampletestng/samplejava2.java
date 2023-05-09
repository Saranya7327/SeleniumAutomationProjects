package sampletestng;

public class samplejava2 {

	public void login () //method overloading
	{
		int a=10;
		System.out.println(a);
	}
	
	
	public void login (String username, int age) //parameterization
	{
		
		System.out.println(username + age);
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		samplejava2 s=new samplejava2();
		s.login();
		s.login("sasi",21);//Argument
		



	}

}
