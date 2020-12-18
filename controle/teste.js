/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.io.IOException;
import java.util.*;
import java.math.*;

public class Main {

	public static void main (String[] args) throws IOException {
		Scanner sc = new Scanner(System.in);
		
		double a, b, c, d, x, xx;
		
		a = sc.nextDouble();
		b = sc.nextDouble();
		c = sc.nextDouble();
		d = (Math.pow(b, 2) - (4 * a * c));
		x = ((-b) + Math.sqrt(d))/(a * 2);
		xx = ((-b) - Math.sqrt(d))/ (a * 2);
		
		if (d<0 || a ==0) {
			System.out.println("Impossivel calcular");
			
		} else {
			System.out.printf("R1 = %.5f\n",x);
			System.out.printf("R2 = %.5f\n",xx);
		}
		
	}
}