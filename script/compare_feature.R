raw_data <- read.csv( file="D:data_form3_addclass.csv",head=TRUE,sep=",")
#get column name into text file
write(colnames(raw_data), file="D:colnames.txt", append = FALSE, sep="\n")

colname <- scan(file="D:colnames.txt", what="char")

a <- 'a'
d <- c()
for (i in 1:4974){ #except 'class'
	b <- paste(a,i)
	c <- gsub(' ','',b)
	d[i] <- c
}

#get real and fake into dataframe

feature.df <- data.frame(d,colname)

#read file .csv after selection

data498_ig <- read.csv(file = "D:train_90_ig.csv")
colnames498_ig <- colnames(data498_ig)
#no class
colnames498_ig <- colnames498_ig[1:498]

#compare feature
feature_after_fs <- list()
for (i in 1:498){
	for(j in 1:4974){
	 if(colnames498_ig[i] == feature.df[j,]['d']){
	  feature_after_fs[i] <- feature.df[j,]['colname']
	  feature_after_fs <- as.data.frame(feature_after_fs)
	  colnames(feature_after_fs)[i] <- colnames498_ig[i]
	 }
	}
}
#write(colnames(raw_data), file="D:colnames.txt", append = FALSE, sep="\n")
#-----------------------------------


data746_cor <- read.csv(file = "D:train_85_cor.csv", head = TRUE, sep=",")
colnames746_cor <- colnames(data746_cor)
#no class
colnames746_cor <- colnames746_cor[1:746]

#compare feature
feature_after_fs_cor <- list()
for (i in 1:746){
	for(j in 1:4974){
	 if(colnames746_cor[i] == feature.df[j,]['d']){
	  feature_after_fs_cor[i] <- feature.df[j,]['colname']
	  feature_after_fs_cor <- as.data.frame(feature_after_fs_cor)
	  colnames(feature_after_fs_cor)[i] <- colnames746_cor[i]
	 }
	}
}








