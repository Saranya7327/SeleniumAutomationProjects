package PageFactory;

import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;

public class PageFactoryPage {
	
	@FindBy(xpath="//*[@id=\"desktop-header-cnt\"]/div[2]/nav/div/div[1]/div/a")
	public static WebElement hoverMen;
	
	@FindBy(css="#desktop-header-cnt > div.desktop-bound > nav > div > div:nth-child(2) > div > a")
	public static WebElement clickWomen;
	
	@FindBy(xpath="//span[text()='Profile']")
	public static WebElement profileIcon;
	
	
	@FindBy(xpath="//input[@class='form-control mobileNumberInput']")
	public static WebElement txtMobileNumber;


	@FindBy(xpath="//div[text()='CONTINUE']")
	public static WebElement btnContinue;
	
	
	@FindBy(xpath="//a[text()='login / Signup']")
	public static WebElement btnLogin;
	
	
	@FindBy(xpath="//div[@class='welcome-header']")
	public static WebElement txtlogin;
	
	//5th
	
	@FindBy(xpath="//div[@class='desktop-navLink']//a[text()='Home & Living']")
	public static WebElement lnkHomeAndLiving;
	
	@FindBy(xpath="//a[text()='Plants & Planters']")
	public static WebElement lnkPlantsPlanters;
	 
	@FindBy(xpath="//div[@class='sort-sortBy']")
	public static WebElement dropdownSortBy;
	
	/*
	 * @FindBy(xpath="//div[@class='sort-sortBy']/ul/li") public static WebElement
	 * dropdownSortByItems;
	 */
	
	@FindBy(xpath="(//label[@class='common-customRadio gender-label'])[1]")
	public static WebElement chckMen;
	
	//label[text()='Men']//div[@class='common-radioIndicator']
	//*[@id="mountRoot"]/div/main/div[3]/div[1]/section/div/div[2]/ul/li[1]/label/input
	/*
	 * @FindBy(xpath="//label[text()='Men']/input") public static WebElement txtMen;
	 */
	
	
	@FindBy(xpath="//label[text()='Bedsheets']/div")
	public static WebElement radioBedsheets;
}

	

	

	


