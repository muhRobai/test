public class Nomer5{
	public static void main(String[] args){
		char[][] data = {{'a', 'z', 'd', 'b', 'r', 'g'},
		{'e', 'r', 't', 'a', 'b', 'x'}, 
		{'v', 'a', 'f', 'p'}, 
		{'q', 'c','z','p','k'}, 
		{'t', 'q', 'o', 'w', 'a', 'g', 'h', 'm', 'k', 'b'}
		};

		char[] baru = new char[data.length];
		sort(data);
		
		for(int i=0; i < data.length; i++){
            for(int j=0; j < data[i].length; j++){
            	if (j == data[i].length-1) {
            	 	 baru[i] = data[i][j];
            	 	//System.out.println(data[i][j]); //hasilnya pengen gini tapi masuk array  	
            	}  
            }
        }

        for(int l = 0; l < baru.length; l++){
        	System.out.print(baru[l]+" ");
        }
   }
   private static void sort(char[][] data){
		for(int i=0; i < data.length; i++){
			for(int j=0; j < data[i].length; j++){
				for(int k=j+1; k < data[i].length; k++){
					if(data[i][k] < data[i][j]){
						char temp= data[i][j];
						data[i][j] = data[i][k];
						data[i][k] = temp;
					}
				}
			}
		}
		for(int i=0;i<data.length;i++){
			for(int j=i+1;j<data.length;j++){
				if(data[j].length < data[i].length){
					char[] temp = data[i];
					data[i] = data[j];
					data[j] = temp;
				}
			}
		}
	}
}