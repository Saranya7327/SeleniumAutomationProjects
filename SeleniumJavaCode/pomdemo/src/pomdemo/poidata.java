package pomdemo;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class poidata {

	//Read ecvvel using poi
	public static void main(String[] args) throws IOException {
		// TODO Auto-generated method stub
		//Place the exccel file in xlxs format
		
		FileInputStream fis=new FileInputStream("C:\\Users\\Saranya\\OneDrive\\Desktop\\PoiTestData.xlsx");
		XSSFWorkbook workbook=new XSSFWorkbook(fis);
		XSSFSheet sheet=workbook.getSheetAt(0);
		//add the test data as test in row0 and some in col 0
		//cell A1=row=0 and col=0
		
		Row row=sheet.getRow(0);
		Cell cell=row.getCell(0);
		System.out.println(cell);
		/*int data= (int)workbook.getSheetAt(0).getRow(1).getCell(0).getNumericCellValue();
		
		System.out.println(data);
		String s=Integer.toString(data);
		System.out.println(s);*/
		System.out.println(sheet.getRow(0).getCell(0));
		
	}

}
