/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slaveffr;

import java.awt.AWTException;
import java.awt.Robot;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;
import java.awt.datatransfer.*;
import java.awt.*;
import java.io.IOException;
import java.util.*;

public class SlaveFFR {

    Robot robot = new Robot();
    
    public static void main(String[] args) throws Exception {
        new SlaveFFR(); 
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
  
  public SlaveFFR() throws Exception
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
	   
	  // Clica no GQIS
           moveclica(1435, 371);
	   robot.delay(20000);
           
           // Caso tenham avisos
           /*
           moveclica(448, 133);
           moveclica(431, 111);
           moveclica(439, 127);
           moveclica(419, 109);
*/
	// Clica em FFR By Product
	   moveclica(78, 139);
	   robot.delay(20000);
           

	// Seleciona Prod Corp LUPA
	   
	   moveclica(253, 276);
           robot.delay(15000);
           
        // Seleciona Manaus
           moveclica(1022, 466);
           robot.delay(5000);
           
	// OK
	   moveclica(1111, 598);
	   robot.delay(1000);

	// Sales Corp LUPA
	   moveclica(253, 302);
	   robot.delay(15000);//1171401 1166 436 1106 598

	// Clica no negócio de cima
	   moveclica(1171, 401);
	   robot.delay(1000);
	// Clica em Private
	   moveclica(1166, 436);
	   robot.delay(1000);
	// Clica em SP HA
	   moveclica(1035, 428);
           robot.delay(5000);
           
	// OK
	   moveclica(1111, 598);
	   robot.delay(1000);
	// Product LUPA
	   moveclica(118, 379);
           robot.delay(15000);
	// H & A
	   moveclica(492,431);
           robot.delay(100);
	// RAC Division
           moveclica(521, 555);
           robot.delay(100);
        // Barra lateral
           moveclica(665, 519);
           robot.delay(100);
        // SRAC
           moveclica(496, 525);
           robot.delay(1000);
        // OK
           moveclica(1110, 600);
           robot.delay(100);
           moveclica(146, 430);
           robot.delay(10000);
           moveclica(1512, 806);
           // 573 395 652 410; 562 457 626 466; 573 474 659 486
           // 629 427; 647 487; 
           clicadireita(573, 395);
           moveclica(652, 410);
           String accsvc = captureclipboard();
           accsvc = convint(accsvc);
           clicadireita(562, 457);
           moveclica(626, 466);
           String waccs = captureclipboard();
           waccs = convint(waccs);
           clicadireita(573, 474);
           moveclica(659, 486);
           String rate = captureclipboard();
           rate = convdec(rate);
       acessa();
       
	   type("INSERT INTO ffr");
           underline();
           type("w ");
           abrirParenteses();
           type("accsvc");
           virgula();
           type("waccs");
           virgula();
           type("rate");
           virgula();
           type("week");
           virgula();
           type("month");
           virgula();
           type("year");
           fecharParenteses();
           type(" VALUES");
           abrirParenteses();
           type(accsvc);
           virgula();
           type(waccs);
           virgula();
           type(rate);
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
	   robot.delay(5000);
	// Clica em "SQL"
           moveclica(387, 96);
           moveclica(470, 290);
           robot.delay(500);
  }
  
  private String convdec(String decimal){
      String valor = decimal.replace(',','.');
      return valor;
  }
  
  private String convint(String num){
      String valor = num.replace(".","");
      return valor;
  }
}
