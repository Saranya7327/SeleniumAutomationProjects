package Common_pomProject;

import java.io.FileInputStream;
import java.io.IOException;
import java.util.Properties;
import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.testng.annotations.AfterSuite;
import org.testng.annotations.BeforeSuite;

public class Common {

	public static WebDriver driver=null;
	public static Properties newproperties=null;
	
	
	public Properties LoadpropertyFile() throws IOException
	{
		FileInputStream fileInputStream = new FileInputStream("config.properties");
		newproperties = new Properties();
		newproperties.load(fileInputStream);

		return newproperties;
	}
	
	public void OpenBrowser()
	{
		String appUrl = newproperties.getProperty("URL");
		String driverPath = newproperties.getProperty("DriverLocation");
		System.setProperty("webdriver.chrome.driver", driverPath);
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.get(appUrl);
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
	}
	
	@BeforeSuite
	public void launchBrowser() throws IOException {
		
		
		LoadpropertyFile();
		OpenBrowser();


	}
	
	@AfterSuite
	public void teardown()
	{
		driver.quit();
	}
}

