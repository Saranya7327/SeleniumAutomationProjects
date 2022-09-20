package mavenAction;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;


public class App {
	
	public static void main(String[] args)

	 {
		 System.setProperty("webdriver.chrome.driver", "C:\\Users\\Saranya\\Selenium\\chromedriver.exe");
		 		WebDriver driver=new ChromeDriver();
		 		driver.get("https://google.com");
	 }
	 
	 
	
}
