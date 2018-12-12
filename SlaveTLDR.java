import java.awt.AWTException;
import java.awt.Robot;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;
import java.awt.datatransfer.*;
import java.awt.*;

/* TUTORIAL
robot.mouseMove(78, 73);
leftClick();
leftHoldClick();
rigthClick();        
robot.delay(2000);
type("141414");
//Enter
robot.keyPress(KeyEvent.VK_ENTER);
robot.keyRelease(KeyEvent.VK_ENTER);
//Double Click KICK
robot.mousePress  (InputEvent.BUTTON1_MASK);
robot.mouseRelease(InputEvent.BUTTON1_MASK);
robot.mousePress  (InputEvent.BUTTON1_MASK);
robot.mouseRelease(InputEvent.BUTTON1_MASK);
//Para puxar, usar essa combinação
robot.mouseMove(600, 206); DE ONDE
leftHoldClick();
robot.mouseMove(542, 899); PARA ONDE  
robot.mouseRelease(InputEvent.BUTTON1_MASK);
//Apaga um caractere AV�?!
apagar();
*/


public class SlaveTLDR
{
  Robot robot = new Robot();

  public static void main(String[] args) throws Exception
  {
	new SlaveTLDR();  
  }
  
  public SlaveTLDR() throws Exception
  {
           robot.mouseMove(96, 887);
           robot.delay(2000);
           robot.mouseMove(341,778);
           leftClick();
	  // Clica no GMES

	   robot.mouseMove(1467, 378);
	   leftClick();
	   robot.delay(8000);
           
           // Caso tenham avisos
           robot.mouseMove(448,133);
	   leftClick();
           robot.mouseMove(431,111);
	   leftClick();

	// Clica na coisa no canto direito
           
           robot.mouseMove(1589, 480);
	   leftClick();
	   robot.delay(200);

	// Seleciona Global View
	   
	   robot.mouseMove(1555, 182);
	   leftClick();
           robot.delay(30000);
        
        // Clica na coisa no canto direito
           
           robot.mouseMove(1589, 480);
	   leftClick();
	   robot.delay(200);

	// Clica no Favorite

	   robot.mouseMove(1566, 232);
	   leftClick();
	   robot.delay(400);
	// Clica em Quality KPI Trend
	   robot.mouseMove(1399, 322);
	   leftClick();
	   robot.delay(10000);

	// Clica em Weekly

	   robot.mouseMove(171, 354);
	   leftClick();
           robot.mouseMove(171, 356);
	   leftClick();
           robot.mouseMove(252, 577);
	   leftClick();
           robot.mouseMove(176, 603);
	   leftClick();
           robot.mouseMove(175, 628);
	   leftClick();
           robot.mouseMove(141, 590);
	   leftClick();
           robot.mouseMove(238, 657);
	   leftClick();
	// Faz o q dps?
	  
	// Fim
  }
  
  private void leftClick()
  {
    robot.mousePress(InputEvent.BUTTON1_MASK);
    robot.delay(200);
	robot.mouseRelease(InputEvent.BUTTON1_MASK);
    robot.delay(200);
  }
  
  private void leftHoldClick()
  {
    robot.mousePress(InputEvent.BUTTON1_MASK);
    robot.delay(200);
  }
  
  private void rightClick()
  {
    robot.mousePress(InputEvent.BUTTON3_MASK);
    robot.delay(200);
	robot.mouseRelease(InputEvent.BUTTON3_MASK);
    robot.delay(200);
  }
  
  private void apagar()
  {
	robot.keyPress(KeyEvent.VK_BACK_SPACE);
	robot.delay(100);
	robot.keyRelease(KeyEvent.VK_BACK_SPACE);
	robot.delay(100);
  }
  
  private void type(int i)
  {
    robot.delay(40);
    robot.keyPress(i);
    robot.keyRelease(i);
  }

  private void type(String s)
  {
    byte[] bytes = s.getBytes();
    for (byte b : bytes)
    {
      int code = b;
      // keycode only handles [A-Z] (which is ASCII decimal [65-90])
      if (code > 96 && code < 123) code = code - 32;
      robot.delay(40);
      robot.keyPress(code);
      robot.keyRelease(code);
    }
  }
}