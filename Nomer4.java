
public class Nomer4 {
    public static void main(String[] args) {
        char cetak [][] = new char [10][10];
        char[] nama = {'P','R','O','G','R','A','M','M','E','R'};
        
        for (int b=0;b<10;b++)
        {
            for (int k=0;k<10;k++)
            {
                if(b == k || b+k == 10-1)
                {
                    cetak [b][k] = nama[b];
                }
                else
                {
                    cetak [b][k] = '=';
                }
                System.out.print(cetak [b][k]+" ");
            }
            System.out.println ();
        }   
    }
}