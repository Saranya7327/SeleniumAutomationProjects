package JavaHandson;

public class sample {

	static int j=1;
	public static void main(String[] args) {
		// TODO Auto-generated method stub

		for(int i=0; i<=100; i++)
		{
			if((i%3==0) && (i%5==0))
			{
				System.out.println("Num divided by both 3 and 5 " + "  " + i);
			}
			
			else if(i%5==0)
			{
				System.out.println("Number diviede by 5" + " " + i);
			}
		}
	
		while(j<=100)
		{
			if(j%2==0)
			{
				System.out.println(j);
			}
			j++;
		}
	}

}
