package sampletestng;

public class Exception1 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

//	int data1 = 50/0;
//		System.out.println(data1);
//		System.out.println("print");
//	}
//}


 

try  
{  
int data=50/0; //may throw exception   
System.out.println(data);
}  
    // handling the exception by using Exception class    

//ArithmeticException
catch(Exception e)  
{  
	
   // System.out.println("The exception is " + e); 
    System.out.println("print");
    e.printStackTrace();
   //throw(e);
  



}  
	}
}




	
