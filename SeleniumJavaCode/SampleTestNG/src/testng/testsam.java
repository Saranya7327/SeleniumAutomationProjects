package testng;

import org.testng.annotations.*;

public class testsam {

	@Test(priority=0)
	public void search()
	{
		System.out.println("Search");
	}
	
@BeforeSuite
	public void search1()
	{
		System.out.println("Search");
	}
	
	@Test(priority=1,invocationCount=2)
	public void about()
	{
		System.out.println("about");
	}
}
