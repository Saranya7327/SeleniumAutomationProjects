package SeleniumBasics;

import java.io.File;
import java.io.IOException;
import java.sql.Driver;
import java.util.List;
import java.util.concurrent.TimeUnit;

import org.apache.commons.io.FileUtils;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Keys;
import org.openqa.selenium.NoAlertPresentException;
import org.openqa.selenium.OutputType;
import org.openqa.selenium.TakesScreenshot;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.interactions.Actions;
import org.testng.Assert;
import org.testng.asserts.SoftAssert;

public class LaunchBrowser {
	
	static int count = 0;
	
public static void main(String[] args) throws InterruptedException, IOException 
{
	
	
	
//Launching browser
	System.setProperty("webdriver.chrome.driver", "C:\\Users\\Saranya\\Selenium\\chromedriver.exe");
	WebDriver driver = new ChromeDriver();
	driver.get("https://google.com");
	driver.manage().timeouts().implicitlyWait(15,TimeUnit.SECONDS);
	String currentURL  = driver.getCurrentUrl();

	System.out.println(currentURL );
	//String PageSource = driver.getPageSource();  
	//System.out.println(PageSource );
	
	
	
	
//Open web app
	driver.navigate().to("https://www.myntra.com/");
	driver.manage().window().maximize();
	
	String title=driver.getTitle();
	System.out.println("The title is "+title);
	//Assert.assertEquals("myntra", title);
	SoftAssert softassert=new SoftAssert();
	softassert.assertEquals("myntra", title);
	
	System.out.println("printed");
	softassert.assertAll();
	if(title.equalsIgnoreCase("online shopping for women, Men, Kids Fashion & Lifestyle - Myntra"))
	{
		System.out.println("Title matches");
	}
	else
	{
		System.out.println("Title does not matched");
	}
	
	Takescreenshot(driver);
	
	
	
	
	
// locate webelement
	String tagname="";
	tagname=driver.findElement(By.cssSelector("#desktop-header-cnt > div.desktop-bound > nav > div > div:nth-child(2) > div > a")).getText();
	System.out.println(tagname);
	Takescreenshot(driver);

//Dropdown

	WebElement Women =driver.findElement(By.cssSelector("#desktop-header-cnt > div.desktop-bound > nav > div > div:nth-child(2) > div > a"));
	Actions action=new Actions(driver);
	action.moveToElement(Women).perform();
	Thread.sleep(2000);
	
	//driver.switchTo().alert().accept();
	
	try {
    driver.switchTo().alert().accept();
	}
	catch(NoAlertPresentException e)
	{
		e.printStackTrace();
	}
	System.out.println("executed");
    
	WebElement Ethnic = driver.findElement(By.cssSelector("#desktop-header-cnt > div.desktop-bound > nav > div > div:nth-child(2) > div > div > div > div > li:nth-child(1) > ul > li:nth-child(4) > a"));
	action.moveToElement(Ethnic);
	action.click();
	action.perform();
	Thread.sleep(2000);
	Takescreenshot(driver);
	
	driver.findElement(By.xpath("//*[@id=\"desktopSearchResults\"]/div[1]/section/div[1]/div[1]/div/div/div")).click();
	List<WebElement> elements = driver.findElements(By.xpath("//*[@id=\"desktopSearchResults\"]/div[1]/section/div[1]/div[1]/div/div/div/ul/li[1]/label"));
    System.out.println("Number of elements:" +elements.size());
    


 
   //for (int i=0; i<elements.size();i++){
     // System.out.println("Checkbox text:" + elements.get(i).getAttribute("value"));
   // }

	
	//Typing 
	String a="Anouk";
	WebElement myElement=driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input"));
	myElement.sendKeys(a);
	myElement.sendKeys(Keys.ENTER);
	Thread.sleep(1000);
	driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/a")).click();
	driver.findElement(By.cssSelector("#desktopSearchResults > div.search-searchProductsContainer.row-base > section > ul > li:nth-child(1) > a > div.product-imageSliderContainer > div")).click();
	//driver.findElement(By.xpath("//*[@id=\"reactPageContent\"]/div/div/div[2]/div[2]/div[3]"));
	//Shift tab control
	java.util.Set<String> handles = driver.getWindowHandles();
	String winHandle1=driver.getWindowHandle();// identifies the present tab and save in 1
	handles.remove(winHandle1);// present handle is removed
	
	String winHandle=handles.iterator().next();// for more tabs for(String winhandle:handles){driver.switchTo.window(winhandle)}
	String winHandle2="";// stores the tab which we want to shift the control
	if(winHandle!=winHandle1)//winhandle-->iterative, winhandle->1 present
	{
		//To retrive the handle of second window, extracting the handle which  does not present
		winHandle2=winHandle;// Storing handle of second window handle
		//switch control to new tab
		driver.switchTo().window(winHandle2);
		System.out.println(winHandle2);
		
	}
	Takescreenshot(driver);
	
	Thread.sleep(2000);
	
	// scroll the webpage till end
	JavascriptExecutor js= (JavascriptExecutor) driver;
	js.executeScript("window.scrollTo(0, document.body.scrollHeight)");
	driver.close();
	driver.switchTo().window(winHandle1);
	System.out.println(winHandle1);
	driver.findElement(By.xpath("//*[@id=\"mountRoot\"]/div/div[1]/main/div[3]/div[1]/section/div/div[3]/ul/li[1]/label/div")).click();
	//Click size
	//driver.findElement(By.xpath("//*[@id=\"sizeButtonsContainer\"]/div[2]/div[2]/div[1]/button")).click();
	//Thread.sleep(6000);
//Scroll untill pincode
	//WebElement scroll=driver.findElement(By.xpath("//*[@id=\"mountRoot\"]/div/div/div/main/div[2]/div[2]/div[5]/div/div/div/input"));
	//js.executeScript("arguments[0].scrollIntoView();", scroll);

//Enter pincode
	//driver.findElement(By.xpath("/html/body/div[2]/div/div/div/main/div[2]/div[2]/div[5]/div/div/div/input")).sendKeys("641041");
	Thread.sleep(3000);
	Takescreenshot(driver);
	//driver.quit();


}


public static void Takescreenshot(WebDriver driver) throws IOException
{
//Take screenshot
	TakesScreenshot ts=(TakesScreenshot)driver;// Type casting the screenshot with driver
	File source=ts.getScreenshotAs(OutputType.FILE);//saving the screenshots
	String filePath = "./Screenshots/Myntra"+count+".png";
	FileUtils.copyFile(source, new File(filePath));
	count++;
}

}




