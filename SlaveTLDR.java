/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slavetldr;

import java.awt.AWTException;
import java.awt.Robot;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;
import java.awt.datatransfer.*;
import java.awt.*;
import java.io.IOException;
import java.util.Calendar;
import java.util.Date;

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
//Para puxar, usar essa combinaÃ§Ã£o
robot.mouseMove(600, 206); DE ONDE
leftHoldClick();
robot.mouseMove(542, 899); PARA ONDE  
robot.mouseRelease(InputEvent.BUTTON1_MASK);
//Apaga um caractere AVÃ?!
apagar();
*/


public class SlaveTLDR
{
  Robot robot = new Robot();

  public static void main(String[] args) throws Exception
  {
        
	new SlaveTLDR();  
  }
  
  private static Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard(); 
	
	private static String captureclipboard() throws UnsupportedFlavorException, IOException {
		try {
			if (clipboard.isDataFlavorAvailable(DataFlavor.stringFlavor))
				return clipboard.getData(DataFlavor.stringFlavor).toString();
			else
				return "";
		} catch (IllegalStateException e) {
			System.out.println("\n> A Area de TransferÃªncia estÃ¡ indisponÃ­vel neste instante: "+e);
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
  
  public SlaveTLDR() throws Exception
  {
      
    	Date data = new Date();
        Calendar cal = Calendar.getInstance();
    	cal.setTime(data);
        String week = Integer.toString(cal.get(Calendar.WEEK_OF_YEAR));
        String month = Integer.toString(cal.get(Calendar.MONTH)+1);
        String year = Integer.toString(cal.get(Calendar.YEAR));
           robot.mouseMove(96, 887);
           robot.delay(2000);
           moveclica(341, 778);
	   // Clica no GMES
          
           // Clica no GMES
          // Se for a Vanessa, é esse
           moveclica(1435, 371); 
           // Se for a Lane, é esse
           //moveclica(1466, 410);
           
           robot.delay(40000);
           // Caso tenham avisos
           moveclica(448, 133);
           moveclica(431, 111);
           moveclica(439, 127);
           moveclica(419, 109);

	// Clica na coisa no canto direito
           
           moveclica(1589, 480);
	   robot.delay(1000);

	// Seleciona Global View
	   
           moveclica(1558,180);
           leftClick();
           robot.delay(8000);
           moveclica(943, 450);
           robot.delay(37000);
        
           
        // Clica no KPI de cima
           moveclica(226, 78);
           robot.delay(2000);
        // Clica no Quality Trend
           moveclica(471, 158);
	   robot.delay(10000);

	// Clica em Weekly
           moveclica(163, 345);
	   robot.delay(2000);
        // Clica em LINE
           moveclica(196, 571);
	   robot.delay(1000);
        // Clica em ALL
           moveclica(171, 594);
	   robot.delay(1000);
        // Seleciona AA1
           moveclica(166, 619);
        // Tira a lista
           moveclica(88, 773);
        // Search
           moveclica(236, 649);
           robot.delay(7000);
	// Excel
	   moveclica(1539, 179);
           robot.delay(5000);
        // Abre o arquivo
           moveclica(1036, 840);
           leftClick();
           leftClick();
           robot.delay(15000);
        // Arrasta pra maximizar
           //arrasta(1281, 113, 1072, 1);
        // Copia cada um
           clicadireita(458, 177);
           moveclica(521,221);
           String tpq = captureclipboard();
           clicadireita(458, 198);
           moveclica(516,229);
           String defect = captureclipboard();
           clicadireita(458, 340);
           moveclica(511, 371);
           String ppm = captureclipboard();
           
               
        // Indo pegar o Rework
           robot.mouseMove(101,885);
	   robot.delay(2000);
       // Seleciona a terceira aba (Local View)
           moveclica(516, 785);
           robot.delay(1000);
       // Production Preparation
           moveclica(305, 70);
           robot.delay(1000);
       // Rework (W/O)
           moveclica(258, 212);
           robot.delay(10000);
       // Clica em Rework
           moveclica(479, 187);
           robot.delay(2000);
       // Clica em Status
           moveclica(194, 354);
       // Clica em ALL
           moveclica(168, 381);
       // Clica em AA1
           moveclica(166, 425);
       // Clica em algum lugar
           moveclica(89, 538);
       // Clica em Search
           moveclica(247, 492);
           robot.delay(5000);
           moveclica(1466, 173);
           robot.delay(5000);
           
           moveclica(1041, 844);
           robot.delay(5000);
           
           moveclica(794, 69);
           leftClick();
           
           moveclica(777, 756);
           leftClick();
           leftClick();
           robot.keyPress(KeyEvent.VK_EQUALS);
       type("soma");
       abrirParenteses();
       type("N2");
       doispontos();
       type("N25");
       robot.keyPress(KeyEvent.VK_ENTER);
       robot.keyRelease(KeyEvent.VK_ENTER);
       
       clicadireita(791,753);
       robot.delay(300);
       moveclica(865, 436);
       robot.delay(700);
       String rework = captureclipboard();
       String ppm2 = Integer.toString(Math.round((Float.parseFloat(rework)/Float.parseFloat(tpq))*1000000));
       acessa();
       
           
	   type("INSERT INTO tldr");
           underline();
           type("w ");
           abrirParenteses();
           type("defect");
           virgula();
           type("tpq");
           virgula();
           type("ppm");
           virgula();
           type("week");
           virgula();
           type("month");
           virgula();
           type("year");
           fecharParenteses();
           type(" VALUES");
           abrirParenteses();
           type(defect);
           virgula();
           type(tpq);
           virgula();
           type(ppm);
           virgula();
           type(week);
           virgula();
           type(month);
           virgula();
           type(year);
           fecharParenteses();
           pontoevirgula();
           
           type("INSERT INTO ifrr");
           underline();
           type("w ");
           abrirParenteses();
           type("tpq");
           virgula();
           type("rework");
           virgula();
           type("ppm");
           virgula();
           type("week");
           virgula();
           type("month");
           virgula();
           type("year");
           fecharParenteses();
           type(" VALUES");
           abrirParenteses();
           type(tpq);
           virgula();
           type(rework);
           virgula();
           type(ppm2);
           virgula();
           type(week);
           virgula();
           type(month);
           virgula();
           type(year);
           fecharParenteses();
           pontoevirgula();
           moveclica(1533, 533);
           
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
  private void abrirParenteses(){
    robot.keyPress(KeyEvent.VK_SHIFT);
    robot.keyPress(KeyEvent.VK_9);
    robot.keyRelease(KeyEvent.VK_SHIFT);
  }

  private void fecharParenteses(){
    robot.keyPress(KeyEvent.VK_SHIFT);
    robot.keyPress(KeyEvent.VK_0);
    robot.keyRelease(KeyEvent.VK_SHIFT);
  }
  
  private void aspaSimples(){
    robot.keyPress(222);
    robot.keyRelease(222);
  }


  private void aspaDupla(){
    robot.keyPress(KeyEvent.VK_SHIFT);
    robot.keyPress(222);
    robot.keyRelease(KeyEvent.VK_SHIFT);
  }
  private void underline(){
    robot.keyPress(KeyEvent.VK_SHIFT);
    robot.keyPress(KeyEvent.VK_MINUS);
    robot.keyRelease(KeyEvent.VK_MINUS);
    robot.keyRelease(KeyEvent.VK_SHIFT);
  }
  private void virgula(){
    robot.keyPress(KeyEvent.VK_COMMA);
    robot.keyRelease(KeyEvent.VK_COMMA);
  }
  
  private void pontoevirgula(){
      robot.keyPress(KeyEvent.VK_SEMICOLON);
      robot.keyRelease(KeyEvent.VK_SEMICOLON);
  }
  
  private void doispontos(){
    robot.keyPress(KeyEvent.VK_SHIFT);
    robot.keyPress(KeyEvent.VK_SEMICOLON);
    robot.keyRelease(KeyEvent.VK_SEMICOLON);
    robot.keyRelease(KeyEvent.VK_SHIFT);
  }
  
  private void moveclica(int x, int y){
      robot.mouseMove(x, y);
      leftClick();
  }
  
  private void clicadireita(int x, int y){
      robot.mouseMove(x, y);
      rightClick();
  }
  
  private void arrasta(int x1, int y1, int x2, int y2){
      robot.mouseMove(x1, y1);
      leftHoldClick();
      robot.mouseMove(x2, y2);
      robot.mouseRelease(InputEvent.BUTTON1_MASK);
      robot.delay(200);
  }
  
  private void acessa(){
              // Vai no IE
	   robot.mouseMove(87,875);
	   robot.delay(3000);
           moveclica(133, 780);
	// Acessa o "bd_lg" do BD
           moveclica(70, 185);
	   robot.delay(7000);
	// Clica em "SQL"
           moveclica(387, 96);
           robot.delay(2000);
           moveclica(470, 290);
  }
}