import java.awt.AWTException;
import java.awt.Robot;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;
import java.awt.datatransfer.*;
import java.awt.*;



public class SlavePRR
{
  Robot robot = new Robot();

  public static void main(String[] args) throws Exception
  {
	new SlavePRR();  
  }
  
  public SlavePRR() throws Exception
  {
	  // Clica no GERP

	   robot.mouseMove(1432, 414);
	   leftClick();
	   robot.delay(15000);

	// Clica na coisa no canto direito
	   
	   robot.mouseMove(1589, 480);
	   leftClick();
	   robot.delay(2000);




	// Seleciona Global View
	   
	   robot.mouseMove(1555, 182);
	   robot.delay(50000);

	// Clica no KPI de cima
	   
	   robot.mouseMove(226, 78);
	   leftClick();
	   robot.delay(2000);

	// Clica no [T] Main KPI Trend

	   robot.mouseMove(242, 186);
	   leftClick();
	   robot.delay(10000);

	// Clica em Weekly
	   robot.mouseMove(161, 347);
	   leftClick();
	// Clica em Final Line
	   robot.mouseMove(211, 511);
	   leftClick();
	// Clica em Search
	   robot.mouseMove(245, 672);
	   leftClick();
	// Clica no Excel
	   robot.mouseMove(1290, 176);
	   leftClick();
	// Clica em Abrir
	   robot.mouseMove(1035, 837);
	   leftClick();
	   robot.delay(10000);
	// Clica na Célula e copiar
	   robot.mouseMove(605, 197);
	   rightClick();
	   robot.mouseMove(649, 231);
	   leftClick();
	   String prodquan = captureclipboard();
	// Vai no IE
	   robot.mouseMove(101,885);
	   robot.delay(2000);
	   robot.mouseMove(133,780);
	   leftClick();
	// Acessa o "bd_lg" do BD
	   robot.mouseMove(83, 249);
	   leftClick();
	   robot.delay(5000);
	// Clica em "SQL"
	   robot.mouseMove(399,142);
	   leftClick();
	   robot.mouseMove(470,290);
	   leftClick();
	   type("INSERT INTO bd_lg.prr_w (prodquant, ppq, ppm) VALUES (");
	   prodquant = captureclipboard();
	   robot.keyPress(KeyEvent.VK_CONTROL);
       robot.keyPress(KeyEvent.VK_V);
       robot.keyRelease(KeyEvent.VK_V);
       robot.keyRelease(KeyEvent.VK_CONTROL);
       // Seleciona a terceira aba (Local View)
       robot.mouseMove(1003,40);
       leftClick();
       // Clica em Status
       robot.mouseMove(230,517);
       // Clica em Processing, pra ficar só o Complete
       robot.mouseMove(231, 563);
       // Clica em Search
       robot.mouse(213,684);
       leftClick();
       // Clica em Excel
       robot.mouse(1446,174);
       leftClick();
       // Clica em Abrir
       robot.mouse(1036,836);
       leftClick();
       // Arrasta até o meio
       robot.mouse(997,831);
       leftHoldClick();
       robot.mouse(1405,831);
       leftClick();
       // Habilitar Edição
       robot.mouse(820,67);
       leftClick();
       // Clica na célula
       robot.mouse(417,804);
       leftClick();
       leftClick();
       type("=SOMA(Z2:Z31)");
       robot.keyPress(KeyEvent.VK_ENTER);
       robot.keyRelease(KeyEvent.VK_ENTER);
       robot.mouse(422,766);
       rightClick();
       robot.mouse(572,443);
       leftClick();
    // Acessa Internet Explorer
       robot.mouseMove(101,885);
	   robot.delay(2000);
	   robot.mouseMove(133,780);
	   leftClick();
	// Acessa o "bd_lg" do BD
	   robot.mouseMove(83, 249);
	   leftClick();
	   robot.delay(5000);
	// Clica em "SQL"
	   robot.mouseMove(399,142);
	   leftClick();
	   robot.mouseMove(470,290);
	   leftClick();
	   String ppq = captureclipboard();
	   type(", ");
	   robot.keyPress(KeyEvent.VK_CONTROL);
       robot.keyPress(KeyEvent.VK_V);
       robot.keyRelease(KeyEvent.VK_V);
       robot.keyRelease(KeyEvent.VK_CONTROL);
       String ppm = ((parseFloat(ppq)/parseFloat(prodquant))*1000000).toString();
       type(", "+ ppm + ");");
       robot.mouseMove(1533,536);
       leftClick();

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

private static Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard(); 
	
	private static String captureclipboard() throws UnsupportedFlavorException, IOException {
		try {
			if (clipboard.isDataFlavorAvailable(DataFlavor.stringFlavor))
				return clipboard.getData(DataFlavor.stringFlavor).toString();
			else
				return "";
		} catch (IllegalStateException e) {
			System.out.println("\n> A Area de Transferência está indisponível neste instante: "+e);
			sleep(100); 
			return captureclipboard(); 
		}
	}

	private static void sleep(long millissegundos) {
		try {
			Thread.sleep(millissegundos);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
	}