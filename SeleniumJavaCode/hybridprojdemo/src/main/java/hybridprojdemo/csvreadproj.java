package hybridprojdemo;

import java.io.FileReader;
import java.io.IOException;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;

import com.opencsv.CSVReader;
import com.opencsv.exceptions.CsvValidationException;

public class csvreadproj {
	
	String CSV_PATH="C:\\Users\\Saranya\\Downloads\\TestData.csv";
	public WebDriver driver;
	private CSVReader csvReader;
	String[] csvCell;
	public WebDriverWait wait;
	@BeforeTest
	public void setup() throws InterruptedException
	{
		System.setProperty("webdriver.chrome.driver","C:\\Users\\Saranya\\Selenium\\chromedriver_95\\chromedriver.exe");
		driver=new ChromeDriver();
		driver.get("https://myntra.com//");
		driver.manage().window().maximize();
		Thread.sleep(5000);
		wait = new WebDriverWait(driver,15);
	}
	
	@Test(priority=0)
	public void dataRead() throws CsvValidationException, IOException
	{
		System.out.println("Check");
		//Crate an object for CSVReader
		 csvReader=new CSVReader(new FileReader(CSV_PATH));
		 while((csvCell=csvReader.readNext())!=null) {
			 //csvCell=csvReader.readNext()
		 String search=csvCell[0];
		
		 driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input")).sendKeys(search);
	}
	}
}

