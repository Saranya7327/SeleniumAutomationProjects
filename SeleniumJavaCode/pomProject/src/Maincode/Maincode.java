package Maincode;

import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.PageFactory;
import org.testng.Assert;
import org.testng.annotations.Test;
import org.testng.asserts.SoftAssert;
import Common_pomProject.Common;
import PageFactory.PageFactoryPage;
public class Maincode extends Common {

//	@Test
//	public void first() throws InterruptedException
//	{
//		PageFactory.initElements(driver,PageFactoryPage.class);
//		//String tagname=PageFactoryPage.getthetext.getText();
//		//System.out.println(tagname);
//		
//		PageFactoryPage.hoverMen.click();
//		
//		
//		//System.out.println(text);
//		WebElement Women=PageFactoryPage.clickWomen;
//		Actions action=new Actions(driver);
//		action.moveToElement(Women).perform();
//		Thread.sleep(2000);
//	}
	
	@Test(priority = 1)
	public void loginToMytra()  {
		
		PageFactory.initElements(driver,PageFactoryPage.class);
		String actualtitle = driver.getTitle();
		
		System.out.println(actualtitle);
		
		Assert.assertEquals(actualtitle.equals("Online Shopping for Women, Men, Kids Fashion & Lifestyle - Myntra"), true);
		
		WebElement profile = PageFactoryPage.profileIcon;
		
		Actions A = new Actions(driver);
		A.moveToElement(profile).build().perform();
		
		
		String actualtext = PageFactoryPage.btnLogin.getText();
		System.out.println(actualtext);
		
		String Exptext ="login / Signup";
		
		SoftAssert SA= new SoftAssert();
		
		SA.assertEquals(actualtext,Exptext);
		
	
		
		PageFactoryPage.btnLogin.click();
		
		
	//	SA.assertAll();
		
		
	}
	
	@Test(priority = 2)
	
	public void loginToProfile() {
		
		PageFactory.initElements(driver,PageFactoryPage.class);
		PageFactoryPage.txtMobileNumber.sendKeys("6655555");
		
		
		
		 
		PageFactoryPage.btnContinue.click();
		
		driver.navigate().back();
		
	}
	
	
	@Test(priority = 3)
	
	public void validateHomeAndLiving()  {
		
		PageFactory.initElements(driver,PageFactoryPage.class);
		
		Actions A = new Actions(driver);
		A.moveToElement(PageFactoryPage.lnkHomeAndLiving).build().perform();
		
		PageFactoryPage.lnkPlantsPlanters.click();
	
		
	}
	
@Test(priority = 4)
	
	public void validateSortByItems() throws InterruptedException  {
		

	
	PageFactory.initElements(driver,PageFactoryPage.class);
	
	
	Actions A = new Actions(driver);
	A.moveToElement(PageFactoryPage.dropdownSortBy).build().perform();
	
	String dropdown =PageFactoryPage.dropdownSortBy.getText();
	
	System.out.println(dropdown);
	
	PageFactoryPage.chckMen.click();
	
//	Boolean menitem=PageFactoryPage.chckMen.isDisplayed();
//	
//	SoftAssert SAA =new SoftAssert();
//	
//	SAA.assertEquals(menitem, "true");
//	
//	
//	  String filterItem =PageFactoryPage.chckMen.getText();
//	  
//	  System.out.println(filterItem);
//	  
//	  Assert.assertEquals(filterItem, "Men");
//	 
	
    Boolean BedsheetsIsSelected = PageFactoryPage.radioBedsheets.isSelected();
	
	if (BedsheetsIsSelected ==true) {
		PageFactoryPage.radioBedsheets.click();
	}else {
		
	System.out.println("Bedsheets is not Selected");
	
	}
	
	
	}
}

	
	
	

