package testng;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.Assert;
import org.testng.Reporter;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Parameters;
import org.testng.annotations.Test;
public class sampletestng {
	  

	 public WebDriver  driver; 

	    //public WebDriverWait object so that it can be used anywhere within class1
	    public WebDriverWait wait;

	    @BeforeClass
	    public void setup()
	        {
	            
	        	System.setProperty("webdriver.chrome.driver", "C:\\Users\\Saranya\\Selenium\\chromedriver_95\\chromedriver.exe");
	        	 driver = new ChromeDriver();
	            wait = new WebDriverWait(driver,15); //explicit wait to increase performance
	            Reporter.log("before is executed");
	        }
	  
	    @Test
	    @Parameters({"browser"})
	    public void login( String browser) throws InterruptedException {
//(@Optional("Optional Parameter") String browser)
	        driver.get("https://myntra.com/");
	        System.out.println(browser);
	        driver.manage().window().maximize();
	        Thread.sleep(5000);
	        String title=driver.getTitle();
	    	System.out.println("The title is "+title);
	    	Assert.assertEquals("myntra", title);
	    	System.out.println(browser);
	        Reporter.log("Test is executed");
	    }
	 
	/*@Test
	public void openbrowser()
	{
		WebDriver driver = new ChromeDriver();
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Saranya\\Selenium\\chromedriver_95\\chromedriver.exe");
		
		driver.get("https://www.myntra.com/");
		driver.manage().timeouts().implicitlyWait(15,TimeUnit.SECONDS);
		String title=driver.getTitle();
		System.out.println("The title is "+title);
		
		if(title.equalsIgnoreCase("Online Shopping for Women, Men, Kids Fashion & Lifestyle - Myntra"))
		{
			System.out.println("Title matches");
		}
		else
		{
			System.out.println("Title does not matched");
		}
	}*/

	@Test(priority=2)
	//@Parameters({"Search", "type"})
	
	public void check() throws InterruptedException
	{
		System.out.println("print");
		driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input")).sendKeys("test");
		Reporter.log("passed");
	}
	
	
}

