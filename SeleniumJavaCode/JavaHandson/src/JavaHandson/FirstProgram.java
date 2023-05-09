package JavaHandson;

public class FirstProgram {
	 static int i=0;
	public static void number()
	{
int a=10, b=15 , c=20;
		
		if(a<b)// if(condition){ Block of statement }
		{
			System.out.println("Condition satisfied" +i);
		}
		else if(b<c)
		{
			System.out.println("Second Condition satisfied");
		}
		else
		{
			System.out.println("Condition not satisfied");
		}
		
	}
	
	public static void loop()
	{
		//while(i<=5)
		for(int i=0;i<5;i++)
		{
			System.out.println(i);
			
		}
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//number();
		loop();
		
	}

}
