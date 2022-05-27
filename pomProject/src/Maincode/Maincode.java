package Maincode;

import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.PageFactory;
import org.testng.annotations.Test;

import Common_pomProject.Common;
import PageFactory.PageFactoryPage;

public class Maincode extends Common {

	@Test
	public void first() throws InterruptedException
	{
		PageFactory.initElements(driver,PageFactoryPage.class);
		//String tagname=PageFactoryPage.getthetext.getText();
		//System.out.println(tagname);
		
		PageFactoryPage.hoverMen.click();
		
		
		//System.out.println(text);
		WebElement Women=PageFactoryPage.clickwomen;
		Actions action=new Actions(driver);
		action.moveToElement(Women).perform();
		Thread.sleep(2000);
	}
	
	
	
	
}
