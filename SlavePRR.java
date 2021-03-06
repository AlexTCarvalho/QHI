/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package slaveprr;

import java.awt.AWTException;
import java.awt.Robot;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;
import java.awt.datatransfer.*;
import java.awt.*;
import java.io.IOException;
import java.util.*;



public class SlavePRR
{
  Robot robot = new Robot();

  public static void main(String[] args) throws Exception
  {
	new SlavePRR();  
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
  
  public SlavePRR() throws Exception
  {
        Date data = new Date();
        Calendar cal = Calendar.getInstance();
    	cal.setTime(data);
        String week = Integer.toString(cal.get(Calendar.WEEK_OF_YEAR));
        String month = Integer.toString(cal.get(Calendar.MONTH)+1);
        String year = Integer.toString(cal.get(Calendar.YEAR));
      
           // �cone do IE
	    robot.mouseMove(101,885);
	    robot.delay(2000);
           

	// Seleciona Global View
           moveclica(759,769);
           robot.delay(1000);

           
	// Clica no KPI de cima
	   
	   moveclica(226, 78);
	   robot.delay(1000);

	// Clica no [T] Main KPI Trend
	   moveclica(242, 186);
	   robot.delay(10000);

	// Clica em Weekly
	   moveclica(161, 347);
	   robot.delay(3000);
	// Clica em Final Line
	   moveclica(211, 511);
	   robot.delay(2000);
	// Clica em Search
	   moveclica(245, 672);
           robot.delay(12000);
	// Clica no Excel
	   moveclica(1360, 179);
           robot.delay(6000);
	// Clica em Abrir
	   moveclica(1030, 842);
	   leftClick();
	   leftClick();
	   leftClick();
	   leftClick();
           robot.delay(12000);
	// Clica na Célula e copiar
           //arrasta(1045, 46, 1025, 1);
           clicadireita(530, 196);
           robot.delay(2000);
           moveclica(606, 230);
	   String prodquant = captureclipboard();
           
           
	// �cone do IE
	   robot.mouseMove(84,881);
	   robot.delay(2000);
        // Seleciona a terceira aba (Local View)
           moveclica(516, 785);
           
        // Caso tenham avisos
           moveclica(448, 133);
           moveclica(431, 111);
           moveclica(439, 127);
           moveclica(419, 109);

        robot.delay(1000);
       // Process Quality
        moveclica(781, 78);
        robot.delay(100);
       // Return Defect
        moveclica(954,182);
        robot.delay(5000);
       // Clica em Status
        moveclica(223, 519);
       // Clica em Processing, pra ficar o Complete
        moveclica(185, 570);
       // Clica em Search
        moveclica(252, 682);
       
       robot.delay(15000);
       // Clica em Excel
       moveclica(1460, 174);
       robot.delay(5000);
       // Clica em Abrir
       moveclica(1057, 849);
       leftClick();
       leftClick();
       
       robot.delay(7000);
       // Habilitar edi��o
       //arrasta(1281, 113, 1072, 1);
       moveclica(833, 59);
       leftClick();
       robot.delay(3000);
       moveclica(960, 720);
       leftClick();
       leftClick();
       robot.keyPress(KeyEvent.VK_EQUALS);
       type("soma");
       abrirParenteses();
       type("Z2");
       doispontos();
       type("Z25");
       robot.keyPress(KeyEvent.VK_ENTER);
       robot.keyRelease(KeyEvent.VK_ENTER);
       clicadireita(960, 720);
       moveclica(1054, 401);
       String ppq = captureclipboard();
       String ppm = Integer.toString(Math.round((Float.parseFloat(ppq)/Float.parseFloat(prodquant))*1000000));
       
       acessa();
       
	   type("INSERT INTO bd");
           underline();
           type("lg");
           ponto();
           type("prr");
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
           type(ppq);
           virgula();
           type(prodquant);
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
  
  private void ponto(){
    robot.keyPress(KeyEvent.VK_PERIOD);
    robot.keyRelease(KeyEvent.VK_PERIOD);
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
	   moveclica(87,875);
	   robot.delay(500);
           moveclica(133, 780);
	// Clica em "SQL"
           moveclica(434, 96);
           robot.delay(2000);
           moveclica(470, 290);
  }
}
