package hybridprojdemo;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.CellType;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;

import com.opencsv.CSVReader;
import com.opencsv.exceptions.CsvValidationException;

public class poidata {
	
	public WebDriver driver;
	public WebDriverWait wait;
	@BeforeTest
	public void setup() throws InterruptedException
	{
		System.setProperty("webdriver.chrome.driver","C:\\Users\\Saranya\\Selenium\\chromedriver.exe");
		driver=new ChromeDriver();
		driver.get("https://myntra.com//");
		driver.manage().window().maximize();
		Thread.sleep(5000);
		wait = new WebDriverWait(driver,15);
	}
	
	@Test(priority=0)
	public void dataRead() throws CsvValidationException, IOException
	{
		FileInputStream fis=new FileInputStream("C:\\Users\\Saranya\\OneDrive\\Desktop\\PoiTestData.xlsx");
		XSSFWorkbook workbook=new XSSFWorkbook(fis);
		XSSFSheet sheet=workbook.getSheetAt(0);
		//add the test data as test in row0 and some in col 0
		//cell A1=row=0 and col=0
		
		Row row=sheet.getRow(0);
		
		Cell cell=row.getCell(0);
		System.out.println(cell);
		String data1 = cell.getStringCellValue();
int data= (int)workbook.getSheetAt(0).getRow(1).getCell(0).getNumericCellValue();
		
		System.out.println(data);
		String s=Integer.toString(data);
		System.out.println(s);
		 driver.findElement(By.xpath("//*[@id=\"desktop-header-cnt\"]/div[2]/div[3]/input")).sendKeys(data1);
	}
	
	/*public static String getNumericData(int sheetnum,int row, int col) throws IOException 
	{
		FileInputStream fis=new FileInputStream("C:\\Users\\Saranya\\OneDrive\\Desktop\\PoiTestData.xlsx");
		XSSFWorkbook workbook1=new XSSFWorkbook(fis);
	String dat=String.valueOf((int)workbook1.getSheetAt(sheetnum).getRow(row).getCell(col).getNumericCellValue()); 
	return dat; 
	}*/
	}

