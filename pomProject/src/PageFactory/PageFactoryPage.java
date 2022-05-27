package PageFactory;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;

public class PageFactoryPage {
	
	@FindBy(xpath="//*[@id=\"desktop-header-cnt\"]/div[2]/nav/div/div[1]/div/a")
	public static WebElement hoverMen;
	
	@FindBy(css="#desktop-header-cnt > div.desktop-bound > nav > div > div:nth-child(2) > div > a")
	public static WebElement clickwomen;
	

	

}
