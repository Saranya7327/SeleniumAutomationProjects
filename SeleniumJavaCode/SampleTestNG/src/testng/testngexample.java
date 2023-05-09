package testng;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.Reporter;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.DataProvider;
import org.testng.annotations.Test;


public class testngexample {


	public WebDriver driver; 

	//public WebDriverWait object so that it can be used anywhere within class1
	public WebDriverWait wait;

	@BeforeClass(groups= {"smoke"})
	public void setup()
	{

		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Saranya\\Selenium\\chromedriver.exe");
		driver = new ChromeDriver();
		wait = new WebDriverWait(driver,15); //explicit wait to increase performance
	}

	@Test(priority=1,groups= {"smoke"})

	public void login() throws InterruptedException {

		driver.get("https://myntra.com/");
		// System.out.println(browser);
		driver.manage().window().maximize();
		Thread.sleep(5000);
		 String title=driver.getTitle();
	    	System.out.println("The title is "+title);
	    	//Assert.assertEquals("myntra", title);
	    	//SoftAssert softassert=new SoftAssert();
	    	//softassert.assertEquals("myntra", title);
	    	//softassert.assertAll();
	}

	@Test(priority=2, dataProvider="searchprovider")

	public void check(String search) throws InterruptedException
	{
		System.out.println("print");
		driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input")).sendKeys(search );
		//driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input")).sendKeys(s);
		System.out.println(search);
		Reporter.log("passed");
	}


	@DataProvider(name="searchprovider")
	public Object [] [] getdata(){
		return new Object[][]
				{
			//{"test","test1"}//passing two args in one para
			{"test"},
			{"test1"}
				};  
	}
}
